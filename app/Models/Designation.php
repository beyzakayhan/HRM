<?php

namespace App\Models;

use App\Models\Department;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $guarded=[];

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }
}
