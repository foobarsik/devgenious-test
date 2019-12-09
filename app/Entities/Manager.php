<?php

namespace App\Entities;

class Manager
{
    public function logPositiveFeedback($amount): void
    {
        echo "Lead gave a positive feedback to junior. Total amount: " . $amount . "<br/>";
    }
}