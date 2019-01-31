<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RemovalNotice extends Mailable
{
    use Queueable, SerializesModels;
    private $custemail, $custname, $removalmsg;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($custemail, $custname, $removalmsg)
    {
        $this->custemail = $custemail;
        $this->custname = $custname;
        $this->removalmsg = $removalmsg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.custRemovalMail', ['custname' => $this->custname, 'custemail' => $this->custemail, 'removalmsg' => $this->removalmsg]);
    }
}
