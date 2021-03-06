<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailClass extends Mailable
{
    use Queueable, SerializesModels;

    protected $userName;
    protected $email;
    protected $msg;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName, $email, $msg)
    {

        $this->userName = $userName;
        $this->email = $email;
        $this->msg = $msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.contact-mail')
            ->with([
                'userName' => $this->userName,
                'email' => $this->email,
                'msg' => $this->msg,
            ])
            ->subject('Новое письмо');
    }
}
