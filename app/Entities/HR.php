<?php

namespace App\Entities;

class HR
{
    public static function logNegativeFeedback($amount): void
    {
        echo "Lead gave a negative feedback to junior. Total amount: " . $amount . "<br/>";
    }
}