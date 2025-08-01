<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class KontaktformularMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data) {}

    public function build()
    {
        return $this->subject('Neue Kontaktanfrage')
                    ->view('emails.kontaktformular')
                    ->with('data', $this->data);
    }
}
