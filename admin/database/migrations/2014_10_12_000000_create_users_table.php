<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('stock', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->default(0);
            $table->date('created_on');
            $table->float('single_price', 5, 2);
            $table->integer('quandity')->unsigned()->default(0);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });


        Schema::create('sale', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact_name');
            $table->integer('contact_number');
            $table->integer('category_id')->unsigned()->default(0);
            $table->date('created_on');
            $table->integer('qandity');
            $table->float('amount_total', 5, 2);
            $table->timestamps();
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
}
