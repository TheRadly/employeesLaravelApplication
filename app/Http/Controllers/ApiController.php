<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employeer;
use \DB;

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

    public function GetListEmployeers(Request $request){

        $offset = $request->get('offset');
        $limit = $request->get('limit');
        $orderBy = $request->get('orderBy');
        $sort = $request->get('sort');
        $search = $request->get('search');
        $searchValue = $request->get('searchValue');
        $employees = Employeer::join('positions', 'employeers.positionID', '=', 'positions.positionID');


        if($search && $searchValue){

            if($search === 'firstName' || $search === 'lastName' || $search === 'surName'){
                $employees = $employees->where($search, 'LIKE', "${searchValue}%");
            } // If

            else{
                $employees = $employees->where($search, '=', $searchValue);
            } // Else

        } // If

        $employees = $employees->orderBy($orderBy, $sort)->offset($offset)->limit($limit)->get();

        return response()->json($employees);

    } // GetListEmployeers

    public function GetCurrentEmployeer(Request $request){

//        Employeer::where('id', '=', id)->update(['firstname' => firstname, 'ln' => ln]);
//        $employees = Employeer::join('positions', 'employeers.positionID', '=', 'positions.positionID');

    } // GetCurrentEmployeer

    public function GetNewChief($id){

        $newChief = Employeer::find($id);

        return response()->json($newChief);

    } // GetNewChief

} // ApiController
