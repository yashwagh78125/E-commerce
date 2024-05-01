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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->integer('max_uses');
            $table->integer('max_uses_user');
            $table->string('type');
            $table->float('discount_amount');
            $table->float('min_amount');
            $table->integer('status')->default(1);
            $table->date('starts_at');
            $table->date('expires_at');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
