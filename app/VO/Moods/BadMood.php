<?php

namespace App\VO\Moods;

use App\Contracts\Mood;

class BadMood extends \App\VO\Moods\Mood implements Mood
{
    public function getName()
    {
        return 'Плохое настроение';
    }

    public function getPositiveTransitionMood(): Mood
    {
        return new NormalMood();
    }

    public function getNegativeTransitionMood(): Mood
    {
        return new MurderousMood();
    }
}