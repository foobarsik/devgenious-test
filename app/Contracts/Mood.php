<?php

namespace App\Contracts;

interface Mood
{
    public function getName();

    public function getPositiveTransitionMood(): Mood;

    public function getNegativeTransitionMood(): Mood;
}