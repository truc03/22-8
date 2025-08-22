<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');              // Tên sản phẩm
            $table->text('description')->nullable(); // Mô tả
            $table->decimal('price', 10, 2);     // Giá
            $table->integer('stock')->default(0); // Tồn kho
            $table->string('image')->nullable(); // Ảnh
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
