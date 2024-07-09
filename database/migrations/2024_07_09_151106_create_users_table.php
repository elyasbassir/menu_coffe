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
        Schema::create('users', function (Blueprint $table) {
            $table->comment('این تیبل برای ذخیره سازی اطلاعات تمام کاربران سایت هست');
            $table->integer('id', true);
            $table->text('name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('user_id')->nullable();
            $table->text('coffee_code')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->text('password')->nullable();
            $table->text('phone')->nullable();
            $table->integer('level')->nullable();
            $table->text('remember_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
