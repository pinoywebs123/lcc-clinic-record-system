<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeMedicalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_medicals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('height');
            $table->string('weight');
            $table->string('vision_r');
            $table->string('vision_l');
            $table->string('hearing_r');
            $table->string('hearing_l');
            $table->string('speech');
            $table->string('nasal');
            $table->string('pediculosis');
            $table->string('eye');
            $table->string('ear');
            $table->string('nose');
            $table->string('teeth');
            $table->string('mouth');
            $table->string('tonsils');
            $table->string('throat');
            $table->string('cervical');
            $table->string('skin');
            $table->string('lungs');
            $table->string('heart');
            $table->string('thyroid');
            $table->string('adenoids');
            $table->string('spleen');
            $table->string('nutrition');
            $table->string('deformities');
            $table->string('posture');
            $table->string('measles');
            $table->string('mumps');
            $table->string('diptheria');
            $table->string('pertusia');
            $table->string('small_pox');
            $table->string('chicken_pox');
            $table->string('typhoid');
            $table->string('physical_injury');
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
        Schema::dropIfExists('employee_medicals');
    }
}
