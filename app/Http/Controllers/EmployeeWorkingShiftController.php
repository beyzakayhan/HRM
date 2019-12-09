<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\EmployeeWorkingShift;

class EmployeeWorkingShiftController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('personal-overtime-info', compact('employees'));
    }

    public function create()
    {
        
        $employeeDepartment = Department::all();

        return view('overtime-info-add', compact('employeeDepartment'));
    }

    public function save(Request $request)
    {
        $working_days = '';
        foreach ($request->working_days as $day) {
            $working_days .= $day.',';
        }

        $holiday_days = '';

        foreach ($request->holiday_days as $day) {
            $holiday_days .= $day.',';
        }
        $working_shift = EmployeeWorkingShift::create([
            'department_id' => $request->department_id,
            'working_days' => $working_days,
            'holiday_days' => $holiday_days,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
        ]);

        return redirect('department-overtime-info');
    }

    public function departmentWorkingShift()
    {
        $workingShift = EmployeeWorkingShift::all();

        return view('department-overtime-info', compact('workingShift'));
    }

    public function edit($id = 0)
    {
        $shifts = [];
        $days = ['Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumaratesi', 'Pazar'];

        if ($id > 0) {
            $employeeDepartment = Department::all();
            $workingShift = EmployeeWorkingShift::where('id', $id)->firstOrFail();
            $working_days = explode(',', rtrim($workingShift->working_days, ', '));
            $holiday_days = explode(',', rtrim($workingShift->holiday_days, ', '));

            return view('overtime-info-edit', compact('workingShift', 'employeeDepartment', 'working_days', 'holiday_days', 'days'));
        }
    }

    public function update(Request $request, $id = 0)
    {
        $working_days = '';
        foreach ($request->working_days as $day) {
            $working_days .= $day.',';
        }

        $holiday_days = '';

        foreach ($request->holiday_days as $day) {
            $holiday_days .= $day.',';
        }

        $working_shift = EmployeeWorkingShift::updateOrcreate(
            ['id' => $id],
            [
                'department_id' => $request->department_id,
                'working_days' => $working_days,
                'holiday_days' => $holiday_days,
                'check_in' => $request->check_in,
                'check_out' => $request->check_out,
            ]
        );
        return redirect('department-overtime-info');
    }
    public function remove($id = 0)
    {
            EmployeeWorkingShift::destroy($id);

            return redirect('department-overtime-info');
    }
}