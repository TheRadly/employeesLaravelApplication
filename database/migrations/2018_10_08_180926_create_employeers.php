<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('employeers', function (Blueprint $table) {

            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('surName');
            $table->double('salary');
            $table->dateTime('adoptionDate');
            $table->integer('chiefID')->unsigned();
            $table->integer('positionID')->unsigned();
            $table->string('imageProfile');

            $table->foreign('chiefID')->references('id')->on('employeers');
            $table->foreign('positionID')->references('positionID')->on('positions');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employeers');
    }
}
