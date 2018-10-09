<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('positions', function (Blueprint $table) {

            $table->increments('positionID');
            $table->string('postValue');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positions');
    }
}
