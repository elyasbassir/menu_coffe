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
        Schema::create('coffee_shops', function (Blueprint $table) {
            $table->integer('id', true);
            $table->text('coffee_code')->nullable();
            $table->text('name_coffee_shop')->nullable();
            $table->text('address_coffee_shop')->nullable();
            $table->text('manager_name_coffee_shop')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coffee_shops');
    }
};
