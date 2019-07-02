<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeminarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seminars', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('course_id')->unsigned();
            $table->integer('fee');
            $table->string('teacher_name');
            $table->string('from_time');
            $table->string('to_time');
            $table->string('from_day');
            $table->string('to_day');
            $table->date('from_date');
            $table->date('to_date');
            $table->string('no_of_student');
            $table->string('address');
            $table->integer('phone_no');
            $table->integer('active_flg');
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
        Schema::dropIfExists('seminars');
    }
}
