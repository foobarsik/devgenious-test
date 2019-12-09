<?php

namespace App\VO\Moods;

use App\Contracts\Mood;

class GoodMood extends \App\VO\Moods\Mood implements Mood
{
    public function getName()
    {
        return 'Хорошее настроение';
    }

    public function getPositiveTransitionMood(): Mood
    {
        $this->hasPositiveFeedback = true;

        return $this;
    }

    public function getNegativeTransitionMood(): Mood
    {
        return new NormalMood();
    }
}