<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class EmployeeAttendance extends Model
{
    protected $table="attendances";
    protected $guarded=[];

    public function employee(){
        return $this->belongsTo('App\Models\Employee');
    }
}
