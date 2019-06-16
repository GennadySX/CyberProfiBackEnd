<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchoolClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sclass', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('name',[8,9,10,11]);
            $table->enum('article', ['a','b','c','d','e']);

        });

        Schema::create('sclass_division', function (Blueprint $table) {
            $table->integer('sclass_id')->unsigned();
            $table->integer('tutor_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
