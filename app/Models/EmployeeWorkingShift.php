<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;

class EmployeeWorkingShift extends Model
{
    protected $table="working_shifts";
    protected $guarded=[];

    
    public function department()
        {
            return $this->belongsTo(Department::class);
        }
    
}
