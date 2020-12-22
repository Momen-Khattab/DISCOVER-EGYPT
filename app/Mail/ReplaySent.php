<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplaySent extends Mailable
{
    use Queueable, SerializesModels;
    public $replay;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($replay)
    {
        $this->replay = $replay;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact', ['replay' => $this->replay])
                    ->from('support@discoveregypt.com')
                    ->subject($this->replay->contact->subject);
    }
}
