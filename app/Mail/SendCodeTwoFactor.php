<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class SendCodeTwoFactor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        //SETEAMOS LA CONFIGURACION DE NUESTRO CORREO ELECTRONICO
        return new Envelope(
            from: new Address(config('doris.email_from'),config('doris.app_name')),
            subject: __('lg.email.sub_send_code_two_factor',['app_name'=>config('doris.app_name')]),
        );  
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.SendCodeTwoFactor',
            with: $this->data,
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
