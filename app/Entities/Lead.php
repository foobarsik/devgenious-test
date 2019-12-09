<?php

namespace App\Entities;

use App\Contracts\Mood;

class Lead
{
    /**
     * @var Mood;
     */
    public $mood;

    /**
     * @var Mood;
     */
    public $prevMood;

    public function __construct(Mood $mood)
    {
        $this->mood = $mood;
    }

    public function reactOnProgress(int $progress)
    {
        switch ($progress) {
            case 0:
                $nextMood = $this->mood->getNegativeTransitionMood();
                break;
            case 1:
                $nextMood = $this->mood->getPositiveTransitionMood();
                break;
            default:
                throw new \UnexpectedValueException('Lead doesn\'t know how to react on progress: ' . $progress);
        }

        $this->switchMood($nextMood);

        return $this->describeMoodChange();
    }

    public function remainsInGoodMood()
    {
        return $this->mood->isGood() && $this->prevMood->isGood();
    }

    public function remainsInMurderousMood()
    {
        return $this->mood->isMurderous() && $this->prevMood->isMurderous();
    }

    private function describeMoodChange(): string
    {
        if ($this->mood === $this->prevMood) {
            return 'My mood remains as ' . $this->mood->getName();
        }

        return 'My mood changed from ' . $this->prevMood->getName() . ' to ' . $this->mood->getName();
    }

    private function switchMood(Mood $mood)
    {
        $this->prevMood = $this->mood;
        $this->mood = $mood;
    }
}