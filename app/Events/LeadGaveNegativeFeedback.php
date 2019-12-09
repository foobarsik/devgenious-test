<?php

namespace App\Events;

use Symfony\Contracts\EventDispatcher\Event;

class LeadGaveNegativeFeedback extends Event
{
    public const NAME = 'negative.feedback';

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