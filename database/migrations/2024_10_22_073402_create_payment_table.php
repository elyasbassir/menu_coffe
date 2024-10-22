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
        Schema::create('payment', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('payment_id')->nullable();
            $table->text('user_id')->nullable();
            $table->integer('price')->nullable();
            $table->boolean('payed')->nullable();
            $table->timestamp('time')->nullable()->comment('تاریخی که فاکتور ایجاد شده');
            $table->text('referenceid')->nullable();
            $table->integer('days')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
