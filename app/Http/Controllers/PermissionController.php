<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function permissionForm()
    {
        return view('permission-form');
    }
}
