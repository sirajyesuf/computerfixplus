<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;

class GetQuote extends Mailable
{
    use Queueable, SerializesModels;

    public $fullname;
    public $email;
    public $problem;


    public function __construct($fullname,$email,$problem)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->problem = $problem;
    }


    public function envelope(): Envelope
    {

        return new Envelope(
            replyTo: [new Address($this->email,$this->fullname)],
        );
    }


    public function content(): Content
    {
        return new Content(
            view:'mail.getquote',
            with:[
            'fullname' => $this->fullname,
            'email' => $this->email,
            'problem' => $this->problem,
        ]);
    }
}
