<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AskNewService extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $service;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $service)
    {
        $this->name = $name;
        $this->service = $service;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('AskServiceMail');
    }
}
