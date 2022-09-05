<?php

namespace App\Mail;

use GuzzleHttp\Psr7\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class RegisteryMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($attr, $id_worker)
    {
        $this->attr = $attr;
        $this->id = $id_worker;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $url = url('/api');
        return $this->markdown('email.registery-request', ['url' => $url])->with([
            'First_Name' => $this->attr['First_Name'],
            'Last_Name' => $this->attr['Last_Name'],
            'Telephone' => $this->attr['Telephone'],
            'Email' => $this->attr['Email'],
            'Password' => bcrypt($this->attr['Password']),
            'id' => $this->id
        ]);
    }
}
