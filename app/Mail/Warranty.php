<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class Warranty extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct(
        public array $data
    ) {}

    /**
     * Get the message envelope. 
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nuevo Reclamo de Garantía: ' . ($this->data['issue']),
            from: 'web-no-reply@newkoolamerica.com',
        );
    }

    /**
     * Get the message content definition. 
     */
    public function content(): Content
    {
        return new Content(
            view: 'warranty_mail',
            with: [
                'data' => $this->data,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if (isset($this->data['attachmentPath']) && $this->data['attachmentPath']) {
            $filePath = $this->data['attachmentPath'];


            return [

                Attachment::fromPath($filePath)
            ];
        }

        return [];
    }


}
