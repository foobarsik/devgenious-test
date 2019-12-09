<?php

namespace App\Listeners;

use App\Entities\Manager;
use App\Events\LeadGavePositiveFeedback;
use Symfony\Contracts\EventDispatcher\Event;

class LogPositiveFeedback extends Event
{
    public function onPositiveFeedbackAction(LeadGavePositiveFeedback $event)
    {
        $managerT1001 = new Manager();
        $managerT1001->logPositiveFeedback($event->getAmount());
    }
}