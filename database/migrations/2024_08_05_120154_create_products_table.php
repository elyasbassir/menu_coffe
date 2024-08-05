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
            $table->comment('این جدول برای نگهداری تمام محصولات مغازه داران هست');
            $table->integer('id', true);
            $table->text('coffee_code')->nullable();
            $table->text('name_product')->nullable();
            $table->text('image_names')->nullable();
            $table->text('description_product')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->boolean('availability')->nullable();
            $table->integer('price')->nullable();
            $table->text('video_name')->nullable();
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
