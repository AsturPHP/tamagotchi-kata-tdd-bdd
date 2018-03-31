<?php

use App\Tamagotchi;
use PHPUnit\Framework\TestCase;

class TamagotchiTest extends TestCase
{

    public function testClassTamagotchiExists()
    {
        $tamagotchi = new Tamagotchi();

        $this->assertNotNull($tamagotchi);
    }

}
