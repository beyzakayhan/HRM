<?php

namespace App\Jobs;

use App\Models\Employee;
use App\Models\Announcement;
use Illuminate\Bus\Queueable;
use App\Mail\AnnouncementMail;
use App\Mail\AnnouncementMarkDownMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use SebastianBergmann\Environment\Console;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    
    public $employee;
    public $announcement;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Employee $employee, Announcement $announcement)
    {
      
        $this->employee=$employee;
        $this->announcement=$announcement;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        // $email=new AnnouncementMail($this->announcement);
        $email = new AnnouncementMarkDownMail($this->announcement);
        Mail::to($this->employee->email)->send($email);
    }
}
