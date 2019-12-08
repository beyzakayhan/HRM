<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $guarded = [];

    public function designations()
    {
        return $this->hasMany('App\Models\Designation');
    }

    public function working_shift()
    {
        return $this->hasOne(EmployeeWorkingShift::class);
    }
}
