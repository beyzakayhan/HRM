<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();

        return view('personal-info', compact('employees'));
    }

    public function create()
    {
        $employee=new Employee;
        $employeeDepartments = Department::all();

        return view('personal-info-add', compact('employeeDepartments','employee'));
    }

    public function save(Request $request)
    {
        $this->validate(request(),[
            'designation_id' => [
                'required',
                'integer',
                Rule::notIn(['0', '0']),
            ],
            'name' => 'required|string|unique:employees',
            'phone' => 'required|max:20',
            'email' => 'required|email|unique:employees|max:50',
            'birthday' => 'required|date',
            'gender' => 'required',
            'marital_status' => 'required',
            'present_addres' => 'required',
            'permanent_addres' => 'required',
            'avatar' => 'mimes:jpeg,jpg,png|max:300',
            'join' => 'required',
        ]);
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $avatarName = $request->file('photo');
                $avatar = $avatarName->hashName();

                $avatarName->move('uploads/image', $avatar);
            }
        } else {
            $avatar = null;
        }

        Employee::create([
            'designation_id' => $request->designation_id,
            'name' => $request->name,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'email' => $request->email,
            'phone' => $request->phone,
            'addres' => $request->addres,
            'join' => $request->join,
            'quit' => $request->quit,
            'salary_amount' => $request->salary,
            'photo' => $avatar,
        ]);

       return redirect('personal-info');
    }

    public function filter($id)
    {
        $designations = Designation::where('department_id', $id)->get();
        $employees = [];
        foreach ($designations as $designation) {
            foreach ($designation->employee as $singleEmployee) {
                array_push($employees, $singleEmployee);
            }
        }

        return view('personal-info', compact('employees'));
    }

    public function detail($id = 0)
    {
        if ($id > 0) {
            $employee = Employee::where('id', $id)->firstOrFail();

            return view('employee-detail', compact('employee'));
        }
    }

    public function edit($id = 0)
    {
        
        $designations = Designation::all();
        if ($id > 0) {
            $employee = Employee::where('id', $id)->firstOrFail();
            return view('personal-info-edit', compact('employee', 'designations'));
        }
    }

    public function update(Request $request, $id=0)
    {
        
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $avatarName = $request->file('photo');
                $avatar = $avatarName->hashName();

                $avatarName->move('uploads/image', $avatar);
            }
        } else {
            $avatar = $request->image;
        }

        if ($id > 0) {
            $sonuc = Employee::updateOrCreate(
                ['id' => $id],
                [
                    'designation_id' => $request->designation_id,
                    'name' => $request->name,
                    'birthday' => $request->birthday,
                    'gender' => $request->gender,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'addres' => $request->addres,
                    'join' => $request->join,
                    'quit' => $request->quit,
                    'salary_amount' => $request->salary,
                    'photo' => $avatar,
                ]
            );
        }

        return redirect('personal-info');
    }

    public function remove($id = 0)
    {
            Employee::destroy($id);

        return redirect('personal-info');
    }
}
