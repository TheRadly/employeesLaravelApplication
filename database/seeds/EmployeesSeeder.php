<?php

use Illuminate\Database\Seeder;
use App\Employeer;

class EmployeesSeeder extends Seeder {

    private static $countEmployeers = 1000;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $countDirector = round(EmployeesSeeder::$countEmployeers * 0.01);
        $countDeputy = round(EmployeesSeeder::$countEmployeers * 0.05);
        $countLawyer = round(EmployeesSeeder::$countEmployeers * 0.1);


    } // Run
}
