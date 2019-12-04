<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees=Employee::all();
        return view('personal-info',$employees);
    }

    public function create()
    {
        $employeeDepartments=Department::all();
        
        return view('personal-info-add',compact('employeeDepartments'));
    }
    
    public function save(Request $request)
    {
    
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $avatarName = $request->file('photo');
                $avatar = $avatarName->hashName();
                
                $avatarName->move('uploads/image', $avatar);
            } 
        } else{
            $avatar=null;

        }
     
         
        Employee::create([

            'employee_designation_id'=>$request->employee_designation_id,
            'name'=>$request->name,
            'birthday'=>$request->birthday,
            'gender'=>$request->gender,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'addres'=>$request->addres,
            'join'=>$request->join,
            'quit'=>$request->quit,
            'salary_amount'=>$request->salary,
            'photo'=>$avatar
        ]);

        return('personal-info');
    }
}
