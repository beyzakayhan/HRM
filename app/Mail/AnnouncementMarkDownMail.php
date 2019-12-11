<?php

namespace App\Mail;

use App\Models\Announcement;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AnnouncementMarkDownMail extends Mailable
{
    use Queueable, SerializesModels;

    public $announcement;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Announcement $announcement)
    {
        
        $this->announcement = $announcement;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.markdownAnnouncement');
    }
}
