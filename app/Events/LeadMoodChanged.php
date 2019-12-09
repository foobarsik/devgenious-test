<?php

namespace App\Events;

use App\Entities\Lead;
use Symfony\Contracts\EventDispatcher\Event;

class LeadMoodChanged extends Event
{
    public const NAME = 'lead.mood.changed';

    protected $lead;

    public function __construct(Lead $lead)
    {
        $this->lead = $lead;
    }

    public function getLead()
    {
        return $this->lead;
    }
}