<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\PayScale;
use Illuminate\Http\Request;

class EmployeePayScaleController extends Controller
{
  
    public function create()
    {
        $employees = Employee::all();
        $payment = PayScale::all();
       
        $none="display:none;";
        return view('salary-info', compact('employees', 'payment', 'none'));
    }

    public function save(Request $request)
    {
        try {
            PayScale::create([
                'employee_id' => $request->id,
                'month' => $request->date,
                'payment_info' => true,
            ]);
        } catch (\Exception  $ex) {
            return $ex->getMessage();
        }
    }

    public function filter(Request $request)
    {
        $payscales = [];
        $employees = Employee::all();
        $result = PayScale::select('employee_id')->where('month', $request->month)->get();
        foreach ($result as $payscale) {
            array_push($payscales, $payscale->employee_id);
        }
       $none=null;
        return view('salary-info', compact('payscales', 'employees','none'));
    }
}
