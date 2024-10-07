<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ClientResponse extends Mailable
{
    use Queueable, SerializesModels;


    public  $wordId;
    public  $userEmail;
    public  $userMessage;

    /**
     * Create a new message instance.
     */
    public function __construct($wordId,$userEmail ,$userMessage)
    {
        $this->wordId = $wordId;
        $this->userMessage = $userMessage;
        $this->userEmail = $userEmail;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Client Response',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.client-response',
        );
    }

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
