<?php

namespace App\Entities;

use App\Exceptions\NoProgressException;

class Junior
{
    public const NEGATIVE_PROGRESS = 0;

    public const POSITIVE_PROGRESS = 1;

    public const PROGRESS_SIGNALS = [self::NEGATIVE_PROGRESS, self::POSITIVE_PROGRESS];

    private $progress;

    private $positiveFeedbacksAmount;

    private $negativeFeedbacksAmount;

    public function __construct()
    {
        $this->positiveFeedbacksAmount = 0;
        $this->negativeFeedbacksAmount = 0;
    }

    public function setProgress($progress)
    {
        if (!in_array($progress, [self::NEGATIVE_PROGRESS, self::POSITIVE_PROGRESS])) {
            throw new \UnexpectedValueException('Unknown progress: ' . $progress);
        }

        $this->progress = $progress;
    }

    public function getProgress()
    {
        if (is_null($this->progress)) {
            throw new NoProgressException('Junior made no progress yet.');
        }

        return $this->progress;
    }

    public function getPositiveFeedbacksAmount()
    {
        return $this->positiveFeedbacksAmount;
    }

    public function getNegativeFeedbacksAmount()
    {
        return $this->negativeFeedbacksAmount;
    }

    public function newPositiveFeedback()
    {
        ++$this->positiveFeedbacksAmount;
    }

    public function newNegativeFeedback()
    {
        ++$this->negativeFeedbacksAmount;
    }
}