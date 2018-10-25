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

      $id = $request->get('idEmployee');
      $firstName = $request->get('firstName');
      $lastName = $request->get('lastName');
      $surName = $request->get('surName');
      $positionID = $request->get('postValue');
      $chiefID = $request->get('chiefID');
      $salary = $request->get('salary');


      if($chiefID === null){
          Employeer::where('id', '=', $id)->update(['firstName' => $firstName, 'lastName' => $lastName, 'surName'=> $surName,
              'positionID' => $positionID, 'salary' => $salary]);
      } // If
      else {
          Employeer::where('id', '=', $id)->update(['firstName' => $firstName, 'lastName' => $lastName, 'surName'=> $surName,
              'positionID' => $positionID, 'chiefID' => $chiefID, 'salary' => $salary]);
      } // Else


      return redirect('/single-page/' . $id);
      //$employees = Employeer::join('positions', 'employeers.positionID', '=', 'positions.positionID');

    } // GetCurrentEmployeer

    public function GetNewChief($id){

        $newChief = Employeer::find($id);

        return response()->json($newChief);

    } // GetNewChief

} // ApiController
