<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_clinics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('grade_section');
            $table->date('date_time');
            $table->string('subject_teacher');
            $table->string('complain');
            $table->string('nurse_assesment');
            $table->string('action_taken');
            $table->string('school_nurse');
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
        Schema::dropIfExists('user_clinics');
    }
}
