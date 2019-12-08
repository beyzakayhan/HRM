<?php

namespace App\Models;

use App\Models\Designation;
use App\Models\EmployeeAttendance;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded=[];


    public function designation()
    {
        return $this->belongsTo('App\Models\Designation');
    }
    
    public function employeeAttendances()
    {
        return $this->hasMany('App\Models\EmployeeAttendance');
    }
}
