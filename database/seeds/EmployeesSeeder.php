<?php

use Illuminate\Database\Seeder;
use App\Employeer;

class EmployeesSeeder extends Seeder {

    // Total number of employees
    private static $countEmployeers = 1000;

    static private $firstNamesArrayMale = [

        'Dmitriy',
        'Alexey',
        'Konstantin',
        'Andrew',
        'Yaroslav',
        'Bogdan',
        'Anton',
        'Roman',
        'Victor',
        'Nikola',
        'Gennady',
        'Evgeny',
        'Egor'

    ]; // Array of male names for the database

    static private $firstNamesArrayFemale = [
        'Lena',
        'Sveta',
        'Vika',
        'Veronika',
        'Olga',
        'Elena',
        'Anastasy',
        'Alina',
        'Ekaterina'

    ]; // Array of female names for the database

    static private $lastNamesArrayMale = [

        'Sobol',
        'Melnikov',
        'Malyshev',
        'Mayorov',
        'Lysenko',
        'Bely',
        'Etkin',
        'Yerin',
        'Yurski',
        'Zhirin',
        'Tsarev',
        'Klychko',
        'Shitov'

    ]; // Array of male lastnames for the database

    static private $lastNameArrayFemale = [

        'Malysheva',
        'Vasichka',
        'Belova',
        'Volobueva',
        'Kizilova',
        'Tregub',
        'Rozhkova',
        'Semina',
        'Lebedeva',
        'Alymova',
        'Yampolec',
        'Augustova',

    ]; // Array of female lastnames for the database

    static private $surNameArrayMale = [

        'Petrovich',
        'Sergeevich',
        'Dmitrievich',
        'Andreevich',
        'Bogdanovich',
        'Alekseevich',
        'Egorovich',
        'Romanovich',
        'Aleksandrovich',
        'Nikitovich',

    ]; // Array of male surnames for the database

    static private $surNameArrayFemale = [

        'Olegovna',
        'Dmitrievna',
        'Sergeevna',
        'Andreevna',
        'Bogdanovna',
        'Alekseevna',
        'Egorovna',
        'Romanovna',
        'Aleksandrovna',
        'Nikitovna',

    ]; // Array of female surnames for the database

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        $countDirector = round(EmployeesSeeder::$countEmployeers * 0.01);
        $countDeputy = round(EmployeesSeeder::$countEmployeers * 0.05);
        $countLawyer = round(EmployeesSeeder::$countEmployeers * 0.15);
        $countDispatcher = round(EmployeesSeeder::$countEmployeers * 0.30);
        $countSecretary = round(EmployeesSeeder::$countEmployeers * 0.49);

        for($i = 0; $i < $countDirector; $i++){

            Employeer::create([

                'positionID' => 1,
                'firstName' => EmployeesSeeder::$firstNamesArrayMale[rand(0, count(EmployeesSeeder::$firstNamesArrayMale) - 1)],
                'lastName' => EmployeesSeeder::$lastNamesArrayMale[rand(0, count(EmployeesSeeder::$lastNamesArrayMale) - 1)],
                'surName' => EmployeesSeeder::$surNameArrayMale[rand(0, count(EmployeesSeeder::$surNameArrayMale) - 1)],
                'salary' => rand(45000, 125000)

            ]);

        } // For I


    } // Run

} // EmployeesSeeder
