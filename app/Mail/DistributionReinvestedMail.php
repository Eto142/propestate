<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DistributionReinvestedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $amount;
    public $transaction_id;

    public function __construct($name, $amount, $transaction_id)
    {
        $this->name = $name;
        $this->amount = $amount;
        $this->transaction_id = $transaction_id;
    }

    public function build()
    {
        return $this->subject('Distributions Reinvested Successfully')
            ->view('emails.distribution_reinvested')
            ->with([
                'name' => $this->name,
                'amount' => $this->amount,
                'transaction_id' => $this->transaction_id,
            ]);
    }
}
