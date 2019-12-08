<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\EmployeeAttendance;
use Illuminate\Support\Facades\DB;

class EmployeeAttendanceController extends Controller
{
    public function index()
    {
        $attendances=EmployeeAttendance::all();
        return view('permission-list',compact('attendances'));
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
        return redirect('permission-info');
    }
   
    public function monthPermission(){
        $none="display:none;";
        return view('month-permission-list',compact('none'));
    }
    
    public function monthPermissionFilter(Request $request){
        $employees=[];
        $start_date=$request->start_date;
        $end_date=$request->end_date;
        $attendances=EmployeeAttendance::where([
            ['start_date', '>=', $start_date ],
            ['end_date','<=',$end_date]
        ])->select('employee_id',DB::raw('sum(day) as total'))->groupBy('employee_id')->get();
        foreach($attendances as $attendance){
            array_push($employees,$attendance);
        }
       
        $none=null;
        return view('month-permission-list',compact('employees', 'none'));
    }
}
