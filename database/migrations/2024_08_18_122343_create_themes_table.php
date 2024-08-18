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
        Schema::create('themes', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('theme_name')->nullable();
            $table->text('template_id')->nullable();
            $table->text('style_name')->nullable()->comment('نام فایل استایل رو میدیم');
            $table->text('script_name')->nullable()->comment('نام فایل اسکریپت رو میدیم');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->text('theme_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
