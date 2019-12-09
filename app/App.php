<?php

namespace App;

use App\Listeners\LogNegativeFeedback;
use App\Listeners\LogPositiveFeedback;
use App\Services\Dispatcher;
use App\Services\Training;

class App
{
    public function run()
    {
        $dispatcher = Dispatcher::get();

        $listener = new LogPositiveFeedback();
        $dispatcher->addListener('positive.feedback', [$listener, 'onPositiveFeedbackAction']);

        $listener = new LogNegativeFeedback();
        $dispatcher->addListener('negative.feedback', [$listener, 'onNegativeFeedbackAction']);

        $training = new Training();
        $training->start();
    }
}