<?php

namespace App\Listeners;

use App\Entities\HR;
use App\Events\LeadGaveNegativeFeedback;
use Symfony\Contracts\EventDispatcher\Event;

class LogNegativeFeedback extends Event
{
    public function onNegativeFeedbackAction(LeadGaveNegativeFeedback $event)
    {
        $hrT1000 = new HR();
        $hrT1000->logNegativeFeedback($event->getAmount());
    }
}