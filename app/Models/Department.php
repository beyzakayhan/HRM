<?php

namespace App\Models;

use App\Models\Designation;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    
    protected $guarded=[];
    
    public function designations()
    {
        return $this->hasMany('App\Models\Designation');
    }
}
