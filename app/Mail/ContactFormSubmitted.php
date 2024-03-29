<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function build()
    {
        return $this->from('inorganicdrake@gmail.com')
                    ->markdown('emails.sendemail')
                    ->subject('Contact Form Submission')
                    ->with([
                        'first_name' => $this->formData['first_name'],
                        'last_name' => $this->formData['last_name'],
                        'email' => $this->formData['email'],
                        'contact' => $this->formData['contact'],
                        'country' => $this->formData['country'],
                        'province' => $this->formData['province'],
                        'city' => $this->formData['city'],
                        'property' => $this->formData['property'],
                        'message' => $this->formData['message'],
                    ]);
    }
}
