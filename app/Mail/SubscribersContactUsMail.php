<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscribersContactUsMail extends Mailable
{
    use Queueable, SerializesModels;

// public varibles 3ashan mabasesh el $variables tany fe el compacts fe el bulit 
    public $name;
    public $subject;
    public $emails;
    public $message;
    // private $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$subject,$emails,$message)
    {

        $this->$name=$name;
        $this->$subject=$subject;
        $this->$message=$message;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //no need to pass parrameter in her with compact becuaces its public 
        return $this->view('admin.pages.emails.contact')->from('noreplay@yahoo.com');
    }
}
