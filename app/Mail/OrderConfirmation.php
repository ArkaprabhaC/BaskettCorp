<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderConfirmation extends Mailable
{
    use Queueable, SerializesModels;
    public $custemail, $custname, $totalPrice;
    public $order = array();
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($custemail, $custname, $totalPrice, $order)
    {
        $this->custemail = $custemail;
        $this->custname = $custname;
        $this->totalPrice = $totalPrice;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.orderMail');
    }
}
