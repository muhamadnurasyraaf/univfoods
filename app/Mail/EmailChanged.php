<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailChanged extends Mailable
{
    use Queueable, SerializesModels;

    private $old_email;
    private $new_email;
    public function __construct($old_email,$new_email){
        $this->old_email = $old_email;
        $this->new_email = $new_email;
    }
    public function build(){
        return $this->subject('Password Changed on UnivFoods App')
        ->to(auth()->user()->email)
        ->view('emails.email-changed')
        ->with([
            'user' => auth()->user(),
            'old_email' => $this->old_email,
            'new_email' => $this->new_email,
        ]);
    }

}
