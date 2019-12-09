<?php

namespace App\VO\Moods;

abstract class Mood
{
    public $hasNegativeFeedback;

    public $hasPositiveFeedback;

    public function __construct($hasNegativeFeedback = false, $hasPositiveFeedback = false)
    {
        $this->hasNegativeFeedback = $hasNegativeFeedback;
        $this->hasPositiveFeedback = $hasPositiveFeedback;
    }
}