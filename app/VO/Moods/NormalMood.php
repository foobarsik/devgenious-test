<?php

namespace App\VO\Moods;

use App\Contracts\Mood;

class NormalMood extends \App\VO\Moods\Mood implements Mood
{
    public function getName()
    {
        return 'Нормальное настроение';
    }

    public function getPositiveTransitionMood(): Mood
    {
        return new GoodMood();
    }

    public function getNegativeTransitionMood(): Mood
    {
        return new BadMood();
    }
}