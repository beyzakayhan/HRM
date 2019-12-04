<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\EmployeeWorkingShift;

class EmployeeWorkingShiftController extends Controller
{
    
    public function index()
    {
        $working_shift=EmployeeWorkingShift::all();
        return view('overtime-info',compact('working_shift'));
    }

    public function create()
    {
        $employeeDepartment=Department::all();
        
        return view('overtime-info-add',compact('employeeDepartment'));
    }
    public function save(Request $request)
    {
        $working_days= '';
        foreach($request->working_days as $day){
            $working_days .=$day.',';
        } 

        $holiday_days='';

        foreach($request->holiday_days as $day)
        {
            $holiday_days .=$day.',';
        }
        EmployeeWorkingShift::create([

            'department_id'=>$request->department_id,
            'working_days'=>$working_days,
            'holiday_days'=>$holiday_days,
            'check-in_time'=>$request->check_in,
            'check-out_time'=>$request->check_out


        ]);
        return redirect('overtime-info');
    }


   
    
}
