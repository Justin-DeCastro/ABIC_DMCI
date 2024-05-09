<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $requestItem;
    public $message;

    /**
     * Create a new message instance.
     *
     * @param array $requestItem The property data
     * @param string $message The message for acceptance or decline
     */
    public function __construct($requestItem, $message)
    {
        $this->requestItem = $requestItem;
        $this->message = $message; // Fixed the assignment here
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('inorganicdrake@gmail.com')
                    ->markdown('emails.sendrequest')
                    ->subject('Property Inquiries')
                    ->with([
                        'message' => $this->message,
                    ]);
    }
}
