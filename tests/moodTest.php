<?php

namespace Tests;

use App\Entities\Junior;
use App\Entities\Lead;
use App\VO\Moods\GoodMood;

use PHPUnit\Framework\TestCase;

class moodTest extends TestCase
{
    /** @test */
    public function lead_negative_reaction_in_good_mood()
    {
        $junior = new Junior();
        $T70 = new Lead(new GoodMood());
        $junior->setProgress(Junior::NEGATIVE_PROGRESS);
        $reaction = $T70->reactOnProgress($junior->getProgress());
        $this->assertEquals($reaction, 'My mood changed from Хорошее настроение to Нормальное настроение');
    }
}