<?php

namespace App\VO\Moods;

use App\Contracts\Mood;

class MurderousMood extends \App\VO\Moods\Mood implements Mood
{
    public function getName()
    {
        return 'Не попадись на глаза';
    }

    public function getPositiveTransitionMood(): Mood
    {
        return new BadMood();
    }

    public function getNegativeTransitionMood(): Mood
    {
        return $this;
    }
}