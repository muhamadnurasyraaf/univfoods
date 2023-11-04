<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MerchantCreated extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    private $user;
    private $merchant;

    public function __construct($user,$merchant)
    {
        $this->user = $user;
        $this->merchant = $merchant;
    }

    public function build(){
        return $this->subject('Merchant Created Notification')
        ->view('emails.merchantCreated')
        ->with([
            'user' => $this->user,
            'merchant' => $this->merchant,
        ]);
     }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Merchant Created',
        );
    }

    /**
     * Get the message content definition.
     */


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
