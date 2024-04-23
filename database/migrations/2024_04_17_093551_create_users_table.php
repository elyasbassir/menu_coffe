<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->comment('این تیبل برای ذخیره سازی اطلاعات تمام کاربران سایت هست');
            $table->integer('id', true);
            $table->text('name')->nullable();
            $table->text('last_name')->nullable();
            $table->text('user_id')->nullable();
            $table->text('cofffe_code')->nullable()->comment('این کد شناسه ای برای اطلاعات اون کافه هست');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
