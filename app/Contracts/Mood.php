<?php

namespace App\Contracts;

interface Mood
{
    public function getName();

    public function getPositiveTransitionMood(): Mood;

    public function getNegativeTransitionMood(): Mood;

    public function isGood(): bool;

    public function iNormal(): bool;

    public function isBad(): bool;

    public function isMurderous(): bool;
}