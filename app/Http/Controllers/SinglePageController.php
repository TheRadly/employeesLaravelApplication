<?php

namespace App\Http\Controllers;

use App\Employeer;
use App\Position;
use Illuminate\Http\Request;

class SinglePageController extends Controller {

    public function SinglePage($id){

        $employeer = Employeer::find($id);
        $position = Position::find($employeer->positionID);

        return view('single-page', ['employeer' => $employeer, 'position' => $position]);

    } // ReturnViewSinglePage

} // SinglePageController
