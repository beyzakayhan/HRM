<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Models\Employee;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Mail\AnnouncementMail;
use Illuminate\Support\Facades\Mail;

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
        $this->validate(request(),[
            'name'=>'required'
        ]);
        $employees=Employee::all();
        $annnouncement=Announcement::create([
            'name' => $request->name
        ]);
         foreach ($employees as $employee) {
            
            
           dispatch(new SendEmailJob($employee,$annnouncement));

             
         }
        return redirect('announcement');
    }


    public function remove($id=0){
        Announcement::destroy($id);
        return redirect('announcement');
    }
}
