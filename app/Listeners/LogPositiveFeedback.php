<?php

namespace App\Listeners;

use App\Entities\Manager;
use App\Events\LeadGavePositiveFeedback;
use Symfony\Contracts\EventDispatcher\Event;

class LogPositiveFeedback extends Event
{
    public function onPositiveFeedbackAction(LeadGavePositiveFeedback $event)
    {
        Manager::logPositiveFeedback($event->getAmount());
    }
}