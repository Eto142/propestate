<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositAddedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $amount;
    public $transaction_id;
    public $payment_method;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $amount, $transaction_id, $payment_method)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->transaction_id = $transaction_id;
        $this->payment_method = $payment_method;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('Deposit Successful')
            ->view('emails.deposit_added')
            ->with([
                'name' => $this->name,
                'amount' => $this->amount,
                'transaction_id' => $this->transaction_id,
                'payment_method' => $this->payment_method,
            ]);
    }
}
