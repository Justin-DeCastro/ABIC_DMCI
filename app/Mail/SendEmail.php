<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $formData;

    /**
     * Create a new message instance.
     *
     * @param array $formData The form data
     */
    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('inorganicdrake@gmail.com')
                    ->markdown('emails.sendemail')
                    ->subject('Property Inquiries')
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
