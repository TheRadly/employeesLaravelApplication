<?php

use Illuminate\Database\Seeder;
use App\Position;

class PosSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Position::create([
            'postValue' => 'Director'
        ]); // Position

        Position::create([
            'postValue' => 'Deputy'
        ]); // Position

        Position::create([
            'postValue' => 'Lawyer'
        ]); // Position

        Position::create([
            'postValue' => 'Dispatcher'
        ]); // Position

        Position::create([
            'postValue' => 'Secretary'
        ]); // Position

    } // Run

} // PosSeeder
