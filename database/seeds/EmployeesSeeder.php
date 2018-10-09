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

        $chiefID = 1;

        for ($i = 0; $i < $countDirector; $i++){

            Employeer::create([

                'positionID' => 1,
                'firstName' => EmployeesSeeder::$firstNamesArrayMale[rand(0, count(EmployeesSeeder::$firstNamesArrayMale) - 1)],
                'lastName' => EmployeesSeeder::$lastNamesArrayMale[rand(0, count(EmployeesSeeder::$lastNamesArrayMale) - 1)],
                'surName' => EmployeesSeeder::$surNameArrayMale[rand(0, count(EmployeesSeeder::$surNameArrayMale) - 1)],
                'salary' => rand(150000, 200000)

            ]); // Employeer

        } // For I - Filling Directors

        for ($i = 0; $i < $countDeputy; $i++){

            Employeer::create([

                'chiefID' => rand($chiefID, $countDirector),
                'positionID' => 2,
                'firstName' => EmployeesSeeder::$firstNamesArrayMale[rand(0, count(EmployeesSeeder::$firstNamesArrayMale) - 1)],
                'lastName' => EmployeesSeeder::$lastNamesArrayMale[rand(0, count(EmployeesSeeder::$lastNamesArrayMale) - 1)],
                'surName' => EmployeesSeeder::$surNameArrayMale[rand(0, count(EmployeesSeeder::$surNameArrayMale) - 1)],
                'salary' => rand(90000, 150000)

            ]); // Employeer

        } // For I - Filling Deputys

        $chiefID = $countDirector;

        for ($i = 0; $i < $countLawyer; $i++){

            Employeer::create([

                'ChiefID' => rand($chiefID, $chiefID + $countDeputy),
                'PositionID' => 3,
                'FirstName' => EmployeesSeeder::$firstNamesArrayMale[rand(0, count(EmployeesSeeder::$firstNamesArrayMale) - 1)],
                'LastName' => EmployeesSeeder::$lastNamesArrayMale[rand(0, count(EmployeesSeeder::$lastNamesArrayMale) - 1)],
                'SurName' => EmployeesSeeder::$surNameArrayMale[rand(0, count(EmployeesSeeder::$surNameArrayMale) - 1)],
                'Salary' => rand(60000, 90000)

            ]); // Employeer

        } // For I - Filling Lawyers

        $chiefID += $countDeputy;

        for ($i = 0; $i < $countDispatcher; $i++){

            Employeer::create([

                'ChiefID' => rand($chiefID, $chiefID + $countLawyer),
                'PositionID' => 4,
                'FirstName' => EmployeesSeeder::$firstNamesArrayFemale[rand(0, count(EmployeesSeeder::$firstNamesArrayFemale) - 1)],
                'LastName' => EmployeesSeeder::$lastNameArrayFemale[rand(0, count(EmployeesSeeder::$lastNameArrayFemale) - 1)],
                'SurName' => EmployeesSeeder::$surNameArrayFemale[rand(0, count(EmployeesSeeder::$surNameArrayFemale) - 1)],
                'Salary' => rand(45000, 60000)

            ]); // Employeer

        } // For I - Filling Dispatchers

        $chiefID += $countLawyer;

        for ($i = 0; $i < $countSecretary; $i++){

            Employeer::create([

                'ChiefID' => rand($chiefID, $chiefID + $countDispatcher),
                'PositionID' => 5,
                'FirstName' => EmployeesSeeder::$firstNamesArrayFemale[rand(0, count(EmployeesSeeder::$firstNamesArrayFemale) - 1)],
                'LastName' => EmployeesSeeder::$lastNameArrayFemale[rand(0, count(EmployeesSeeder::$lastNameArrayFemale) - 1)],
                'SurName' => EmployeesSeeder::$surNameArrayFemale[rand(0, count(EmployeesSeeder::$surNameArrayFemale) - 1)],
                'Salary' => rand(30000, 45000)

            ]); // Employeer

        } // For I - Filling Secretarys

    } // Run

} // EmployeesSeeder
