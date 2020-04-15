<?php

namespace Imtiaz\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PkgMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $text;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($text,$email,$name)
    {
        //

        $this->name=$name;
        $this->email=$email;
        $this->text=$text;
    }

    /**
     * Build the message.
     *
     * @return $this
     */ 
    public function build($text,$email)

   {      

         return $text;
         return $this->from($email)
                     ->view('contact::contact.emails.contact-from');
    }
}
