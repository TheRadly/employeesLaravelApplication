<?php

namespace App\Http\Controllers;

use App\Employeer;
use App\Position;
use Illuminate\Http\Request;

class SinglePageController extends Controller {

    public function SinglePage($id){

        $employeer = Employeer::find($id);
        $positions = Position::get();

        $director = Employeer::find($employeer->chiefID);

        return view('single-page', ['employeer' => $employeer, 'positions' => $positions, 'director' => $director]);

    } // ReturnViewSinglePage

    public function CreateNewEmployeer(){

        return view('new-user');

    } // CreateNewEmployeer

} // SinglePageController
