<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employeer;
use \Storage;
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

        for($i = 0; $i < count($employeers); $i++){

            $employeers[$i]->countEmployees = Employeer::where('chiefID','=', $employeers[$i]->id)->count();

        } // For I

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
      $adoptionDate = $request->get('adoptionDate');
      $fileName = null;

        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->extension();
            $fileName = "${id}.${ext}";

            Storage::disk('public_img')->putFileAs('/', $file, $fileName);

        } // If

        $data = [];

        $data['firstName'] = $firstName;
        $data['lastName'] = $lastName;
        $data['surName'] = $surName;
        $data['positionID'] = $positionID;
        $data['salary'] = $salary;
        $data['adoptionDate'] = $adoptionDate;

        if($chiefID){

            $data['chiefID'] = $chiefID;

        } // If
        else{
            $data['chiefID'] = null;
        } // Else

        if($fileName){

            $data['imageProfile'] = $fileName;

        } // If

        Employeer::where('id', '=', $id)->update($data);

        return redirect('/single-page/' . $id);

    } // GetCurrentEmployeer

    public function GetNewChief($id){

        $newChief = Employeer::find($id);

        return response()->json($newChief);

    } // GetNewChief

    public function GetNewEmployeer(Request $request){

        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $surName = $request->get('surName');
        $positionID = $request->get('postValue');
        $chiefID = $request->get('chiefID');
        $salary = $request->get('salary');
        $adoptionDate = $request->get('adoptionDate');
        $fileName = null;

        $data = [];

        $data['firstName'] = $firstName;
        $data['lastName'] = $lastName;
        $data['surName'] = $surName;
        $data['positionID'] = $positionID;
        $data['salary'] = $salary;
        $data['adoptionDate'] = $adoptionDate;

        if($chiefID){

            $data['chiefID'] = $chiefID;

        } // If

        $id = Employeer::insertGetId($data);

        if($request->hasFile('image')){

            $file = $request->file('image');
            $ext = $file->extension();
            $fileName = "${id}.${ext}";

            Storage::disk('public_img')->putFileAs('/', $file, $fileName);
            Employeer::where('id', '=', $id)->update(['imageProfile' => $fileName]);

        } // If

        return redirect('/single-page/' . $id);

    } // GetNewEmployeer

    public function DeleteEmployeer($id){

        self::ChangeChief($id);

        Employeer::where('id','=',$id)->delete();

        return redirect('/list-employees');

    } // DeleteEmployeer

    public static function ChangeChief($id){

        $employeeWithChef = Employeer::where('chiefID', '=', $id)->get(['id']);

        if(!$employeeWithChef){
            return false;
        } // If

        else if(count($employeeWithChef) == 0){
            return true;
        } // Else If

        $employees = Employeer::find($id);

        if(!$employees){
            return false;
        } // If

        if(count($employeeWithChef) > 0){

            $chiefsID = Employeer::where('positionID', '=', $employees->positionID)->get(['id']);

            $employeesLength = count($employeeWithChef);
            $chiefsIDLength = count($chiefsID);

            for( $i = 0; $i < $employeesLength; $i++ ){

                do {
                    $randomChief = $chiefsID[rand(0, $chiefsIDLength - 1)]->id;
                } while ($id == $randomChief); // Do While

                Employeer::where('id','=',$employeeWithChef[$i]->id)->update(['chiefID'=>$randomChief]);

            } // For

            return true;

        } // If

        return false;

    } // ChangeChief

} // ApiController
