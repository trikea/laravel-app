<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $create;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($create)
    {
        $this->create = $create;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('trikeameng168@gmail.com')->subject('New Property')->view('emails.testmail')->with('create', $this->create);
    }
}
