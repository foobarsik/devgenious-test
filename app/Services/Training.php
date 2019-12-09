<?php

namespace App\Services;

use App\Entities\Junior;
use App\Entities\Lead;
use App\Events\LeadGaveNegativeFeedback;
use App\Events\LeadGavePositiveFeedback;
use App\Events\LeadMoodChanged;
use App\VO\Moods\GoodMood;

class Training
{
    public function start()
    {
        $junior = new Junior();
        $T70 = new Lead(new GoodMood());
        for ($i = 0; $i <= 10; $i++) {
            $junior->setProgress(Junior::PROGRESS_SIGNALS[array_rand(Junior::PROGRESS_SIGNALS)]);
            $reaction = $T70->reactOnProgress($junior->getProgress());
            echo 'Lead said: ' . $reaction . '<br/>';
            $event = new LeadMoodChanged($T70);
            Dispatcher::get()->dispatch($event, LeadMoodChanged::NAME);
            if ($T70->remainsInGoodMood()) {
                $junior->newPositiveFeedback();
                $event = new LeadGavePositiveFeedback($junior->getPositiveFeedbacksAmount());
                Dispatcher::get()->dispatch($event, LeadGavePositiveFeedback::NAME);
            } else if ($T70->remainsInMurderousMood()) {
                $junior->newNegativeFeedback();
                $event = new LeadGaveNegativeFeedback($junior->getNegativeFeedbacksAmount());
                Dispatcher::get()->dispatch($event, LeadGaveNegativeFeedback::NAME);
            }
        }
    }
}