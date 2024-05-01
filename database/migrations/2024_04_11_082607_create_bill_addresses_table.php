<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bill_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('company_name');
            $table->string('country');
            $table->string('street');
            $table->string('city');
            $table->string('state');
            $table->string('mobno');
            $table->string('email');
            $table->string('order_note')->nullable();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill_addresses');
    }
};
