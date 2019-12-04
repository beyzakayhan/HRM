<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;


class DesignationController extends Controller
{
    public function index()
    {
         $employeeDesignations=Designation::all();
         return view('designation-info',compact('employeeDesignations'));
    }
    
    public function create()
    {
        $employeeDepartments=Department::all();
        return view('designation-add',compact('employeeDepartments'));
    }

    public function save(Request $request)
    {
        Designation::create([
           'department_id'=>$request->department_id,
            'name'=>$request->name,
            'birthday'=>$request->birthday,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'addres'=>$request->addres,
            'join'=>$request->join,
            'quit'=>$request->quit,
            'salary'=>$request->salary,
            'avatar'=>$request->avatar
        ]);


       return redirect('designation-info');
    }

    public function getDesignation(Request $request)
    {
        $designation=Designation::where("department_id", $request->department_id)->get();
        return response()->json($designation);
                     
    }

}
