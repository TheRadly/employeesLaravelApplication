<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employeer;

class ApiController extends Controller {

    public function GetEmployeers($id){

        $employeers = [];

        if($id == 0){

            $employeers = Employeer::where('positions.positionID', '=', 1)->join('positions', 'employeers.positionID', '=', 'positions.positionID')->get();

        } // If
        else {

            $employeers = Employeer::where('chiefID', '=', $id)->join('positions', 'employeers.positionID', '=', 'positions.positionID')->get();

        } // Else

        return response()->json($employeers);

    } // GetEmployeers

} // ApiController
