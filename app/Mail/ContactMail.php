<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $description;
    public $tel;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$description,$tel)
    {
        $this->email = $email;
        $this->description = $description;
        $this->tel = $tel;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Bienal Mail')->view('email');
    }
}
