<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class DepartmentController extends Controller
{
    public function index()
    {
        $employeeDepartments=Department::all();
       return view('department-info',compact('employeeDepartments'));
    }


    public function create()
    {
        return view('department-add');
    }

    public function save(Request $request)
    {
     

        Department::create([
            'name'=>$request->name,
            'description'=>$request->description
        ]);
       
        
         return redirect('department-info');
    }
}
