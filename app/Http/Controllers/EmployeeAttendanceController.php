<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\EmployeeAttendance;

class EmployeeAttendanceController extends Controller
{
    public function index()
    {
        $attendance=EmployeeAttendance::all();
        return view('permission-list',compact('attendance'));
    }

    public function create()
    {
        $employees=Employee::all();
        
        return view('permission-form',compact('employees'));
    }
    public function save(Request $request)
    {
    
    EmployeeAttendance::create([

        'employee_id'=>$request->employee_id,
        'start_date'=>$request->start_date,
        'end_date'=>$request->end_date,
        'day'=>$request->day,
        'resaon'=>$request->resaon


    ]);
        return redirect('permission-list');
    }


}
