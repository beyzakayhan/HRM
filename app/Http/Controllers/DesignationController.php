<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Designation;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
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
        $designation=new Designation();
        return view('designation-add',compact('employeeDepartments','designation'));
    }

    public function save(Request $request)
    {
        $this->validate(request(),[
            'department_id' => [
                'required',
                'integer',
                Rule::notIn(['0', '0']),
            ],
            'name'=>'required|unique:designations'
        ]);
        Designation::create([
           'department_id'=>$request->department_id,
            'name'=>$request->name,
        ]);


       return redirect('designation-info');
    }

    public function getDesignation(Request $request)
    {
        $designation=Designation::where("department_id", $request->department_id)->get();
        return response()->json($designation);
                     
    }
    
    public function edit($id=0){

        if ($id > 0) {
            $designation = Designation::where('id', $id)->firstOrFail();
            return view('designation-add', compact('designation'));
        }
    }

    public function update($id=0){
        $this->validate(request(),[
            'department_id' => [
                'required',
                'integer',
                Rule::notIn(['0', '0']),
            ],
            'name'=>'required|unique:designations'
        ]);
        $data = request()->all();
        
        if ($id > 0) {
            $employeeDesignation = Designation::where('id', $id)->firstOrFail();
            $employeeDesignation->update($data);
        

        }
        return redirect('designation-info');
    }

    public function remove($id=0){
        Designation::destroy($id);
        return redirect('designation-info');
    }
}
