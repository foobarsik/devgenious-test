<?php

namespace App\VO\Moods;

abstract class Mood
{
    public function isGood(): bool
    {
        return $this instanceof GoodMood;
    }

    public function iNormal(): bool
    {
        return $this instanceof NormalMood;
    }

    public function isBad(): bool
    {
        return $this instanceof BadMood;
    }

    public function isMurderous(): bool
    {
        return $this instanceof MurderousMood;
    }
}