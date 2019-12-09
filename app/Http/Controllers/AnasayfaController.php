<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Department;

class AnasayfaController extends Controller
{
        public function index()
        {
            $announcements=Announcement::all();
            return view('anasayfa',compact('announcements'));
        }

 
}
