<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::all();

        return view('announcement', compact('announcements'));
    }

    public function create()
    {
        return view('announcement-add');
    }

    public function save(Request $request)
    {
        
        Announcement::create([
            'name' => $request->name
        ]);

        return redirect('announcement');
    }
}
