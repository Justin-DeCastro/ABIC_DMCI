<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendProperties extends Mailable
{
    use Queueable, SerializesModels;

    public $property;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param array $property The property data
     * @param string $message The message for acceptance or decline
     */
    public function __construct($property, $message)
    {
        $this->property = $property;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('inorganicdrake@gmail.com')
                    ->markdown('emails.sendproperties')
                    ->subject('Property Inquiries')
                    ->with([
                        'message' => $this->message,
                    ]);
    }
}
