<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DepartmentController extends Controller
{
    public function index()
    {
        $employeeDepartments = Department::all();
        Cache::put('employeeDepartments', $employeeDepartments);
        return view('department-info', compact('employeeDepartments'));
    }

    public function create()
    {
        $department = new Department();
        return view('department-add', compact('department'));
    }
    
    
    public function save(Request $request)
    {
            $this->validate(request(),[
                'name'=>'required'
            ]);
            Department::create([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            return redirect('department-info');

    }

    public function edit($id=0)
    {
        
        if ($id > 0) {
            $department = Department::where('id', $id)->firstOrFail();
            return view('department-add', compact('department'));
        }
    }
    public function update($id=0){
        
        $this->validate(request(),[
            'name'=>'required'
        ]);
        $data = request()->all();
        
        if ($id > 0) {
            $employeeDepartments = Department::where('id', $id)->firstOrFail();
            $employeeDepartments->update($data);
        

        }
        return redirect('department-info');
    }

    public function remove($id=0){
        Department::destroy($id);
        return redirect('department-info');
    }
}
