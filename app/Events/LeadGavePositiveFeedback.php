<?php

namespace App\Events;

use Symfony\Contracts\EventDispatcher\Event;

class LeadGavePositiveFeedback extends Event
{
    public const NAME = 'positive.feedback';

    protected $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }
}