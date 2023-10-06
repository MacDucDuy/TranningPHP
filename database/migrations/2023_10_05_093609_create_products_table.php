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
            $table->id(); // Mã sản phẩm kiểu Integer
            $table->string('name'); // Tên sản phẩm kiểu Varchar
            $table->integer('category_id'); // Mã danh mục kiểu Integer
            $table->float('price'); // Giá sản phẩm kiểu Float
            $table->string('slug'); // Slug kiểu Varchar
            $table->string('content'); // Nội dung kiểu Varchar
            $table->string('description'); // Miêu tả kiểu Varchar
            $table->enum('status', [0, 1]); // Trạng thái kiểu Enum
            $table->timestamps();
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
