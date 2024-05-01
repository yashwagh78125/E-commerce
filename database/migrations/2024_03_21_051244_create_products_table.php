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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('description')->nullable();
            $table->double('price', 10, 2);
            $table->double('discount',10,2);
            $table->double('offer_price',10,2);
            $table->double('compare_price', 10, 2)->nullable();
            $table->string('product_img');
            $table->string('images');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcat_id')->nullable();
            $table->unsignedBigInteger('brand_id')->nullable();
            $table->enum('is_featured', ['Yes', 'No'])->default('No');
            $table->string('sku');
            $table->string('barcode')->nullable();
            $table->enum('track_qty', ['Yes', 'No'])->default('Yes');
            $table->integer('qty')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('new_arrival')->default(1);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('subcat_id')->references('id')->on('subcategories')->onDelete('cascade')->nullable();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
