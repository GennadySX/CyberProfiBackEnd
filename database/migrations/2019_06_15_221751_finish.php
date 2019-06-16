<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Finish extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//1
        Schema::create('lesson_division', function (Blueprint $table) {
            $table->integer('lesson_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->foreign('lesson_id')->references('id')->on('lesson')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->primary(['lesson_id', 'teacher_id']);
        });

//2

//        Schema::table('ask', function ( $table) {
//            $table->foreign('id_task')->references('id')->on('task')
//                ->onUpdate('restrict')->onDelete('restrict');
//            $table->primary(['id_task']);
//        });
//
////3
//
//
//        Schema::table('sclass_division', function ( $table) {
//            $table->foreign('sclass_id')->references('id')->on('sclass')
//                ->onUpdate('cascade')->onDelete('cascade');
//            $table->foreign('tutor_id')->references('id')->on('users')
//                ->onUpdate('cascade')->onDelete('cascade');
//            $table->primary(['sclass_id', 'tutor_id']);
//        });
////4
//        Schema::table('exam', function ( $table) {
//            $table->foreign('lesson_id')->references('id')->on('lesson')
//                ->onUpdate('restrict')->onDelete('restrict');
//            $table->foreign('type_id')->references('id')->on('task_type')
//                ->onUpdate('restrict')->onDelete('restrict');
//            $table->foreign('sclass_id')->references('id')->on('sclass')
//                ->onUpdate('restrict')->onDelete('restrict');
//            $table->foreign('user_id')->references('id')->on('users')
//                ->onUpdate('restrict')->onDelete('restrict');
//
//            $table->primary(['lesson_id', 'type_id','sclass_id','user_id']);
//        });
////5
//        Schema::table('answer', function ( $table) {
//            $table->foreign('exam_id')->references('id')->on('exam')
//                ->onUpdate('restrict')->onDelete('restrict');
//            $table->foreign('user_id')->references('id')->on('users')
//                ->onUpdate('restrict')->onDelete('restrict');
//            $table->foreign('ask_id')->references('id')->on('ask')
//                ->onUpdate('restrict')->onDelete('restrict');
//
//            $table->primary(['exam_id', 'user_id','ask_id']);
//        });
//        //6
//        Schema::table('result', function ( $table) {
//            $table->foreign('answer_id')->references('id')->on('answer')
//                ->onUpdate('restrict')->onDelete('restrict');
//
//            $table->primary(['answer_id']);
//        });






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
