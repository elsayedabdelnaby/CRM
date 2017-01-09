<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUTprivilegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UTprivilegs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usertype_id')->unsigned();
            $table->foreign('usertype_id')->references('id')->on('usertypes');
            $table->integer('form_id')->unsigned();
            $table->foreign('form_id')->references('id')->on('forms');
            $table->boolean('view');
            $table->boolean('insert');
            $table->boolean('update');
            $table->boolean('delete');
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
        Schema::drop('UTprivilegs');
    }
}
