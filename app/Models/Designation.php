<?php

namespace App\Models;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $guarded = [];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

    public function employee()
    {
        return $this->hasMany('App\Models\Employee');
    }
}
