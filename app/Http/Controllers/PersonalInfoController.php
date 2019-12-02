<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalInfoController extends Controller
{
    public function index()
    {
        return view('personal-info');
    }

    public function add()
    {
        return view('personal-info-add');
    }
    public function overtimeInfo()
    {
        return view('overtime-info');
    }
    public function overtimeAdd()
    {
        return view('overtime-info-add');
    }
    public function salaryInfo()
    {
        return view('salary-info');
    }
    public function salaryAdd()
    {
        return view('salary-info-add');
    }
    
}
