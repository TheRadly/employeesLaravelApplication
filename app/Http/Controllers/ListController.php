<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller {

    public function ListEmployees(){

        return view('list');

    } // ListEmployees

} // ListController
