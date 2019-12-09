<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        $this->validate(request(),[
            'employee_id' => [
                'required',
                'integer',
                Rule::notIn(['0', '0']),
            ],
            'start_date'=>'required',
            'end_date'=>'required',
            'day'=>'required',
            'resaon'=>'required'
        ]);
    
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

    public function edit($id=0)
    {
        
        if ($id > 0) {
            $attendance =EmployeeAttendance::where('id', $id)->firstOrFail();
            return view('permission-edit', compact('attendance'));
        }
    }
    public function update($id=0){
        
        $this->validate(request(),[
            'employee_id' => [
                'required',
                'integer',
                Rule::notIn(['0', '0']),
            ],
            'start_date'=>'required',
            'end_date'=>'required',
            'day'=>'required',
            'resaon'=>'required'
        ]);
        $data = request()->all();
        
        if ($id > 0) {
            $attendance = EmployeeAttendance::where('id', $id)->firstOrFail();
            $attendance->update($data);
        

        }
        return redirect('permission-info');
    }

    public function remove($id=0){
        EmployeeAttendance::destroy($id);
        return redirect('permission-info');
    }
}
