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




    public function testATamagotchiIsCreatedWithDefaultValues()
    {
        $tamagotchi = new Tamagotchi();
        $this->assertEquals(0,$tamagotchi->getHungriness());
        $this->assertEquals(0,$tamagotchi->getFullness());
        $this->assertEquals(0,$tamagotchi->getHappiness());
        $this->assertEquals(0,$tamagotchi->getTiredness());

    }

    public function testATamagotchiIsCreatedWithCustomAndDifferentValues()
    {
        $value=20;
        $tamagotchi = new Tamagotchi($value,$value+1,$value+2,$value+3);
        $this->assertEquals($value,$tamagotchi->getHungriness());
        $this->assertEquals($value+1,$tamagotchi->getFullness());
        $this->assertEquals($value+2,$tamagotchi->getHappiness());
        $this->assertEquals($value+3,$tamagotchi->getTiredness());

    }

    public function testFeedingATamagotchiHungrinessIsDecreasedAndFullnessIsIncreased()
    {
        $tamagotchi = $this->getARegularTamagotchi();
        $expectedValues = $this->getTamagotchiValues($tamagotchi);

        $tamagotchi->feed();

        $expectedValues['hungriness']--;
        $expectedValues['fullness']++;

        $this->assertEquals($expectedValues,$this->getTamagotchiValues($tamagotchi));

    }

    private function getARegularTamagotchi()
    {
        $regularValue = 50;
        return new Tamagotchi($regularValue, $regularValue, $regularValue, $regularValue);
    }

    private function getTamagotchiValues($tamagotchi)
    {
        $values = [];
        foreach(['hungriness','fullness','happiness','tiredness'] as $key){
            $values[$key] = $tamagotchi->{'get'.($key)}();
        }
        return $values;

    }

    public function testPlayingATamagotchiHappinessIsIncreasedAndTirednessIsIncreased()
    {
        $tamagotchi = $this->getARegularTamagotchi();
        $expectedValues = $this->getTamagotchiValues($tamagotchi);

        $tamagotchi->play();

        $expectedValues['happiness']++;
        $expectedValues['tiredness']++;

        $this->assertEquals($expectedValues,$this->getTamagotchiValues($tamagotchi));

    }

    public function testPuttingATamagotchiToBedTirednessIsDecreased()
    {
        $tamagotchi = $this->getARegularTamagotchi();
        $expectedValues = $this->getTamagotchiValues($tamagotchi);

        $tamagotchi->toBed();
        $expectedValues['tiredness']--;

        $this->assertEquals($expectedValues,$this->getTamagotchiValues($tamagotchi));

    }

    public function testMakingTamagotchiPoopHisFullnessIsDecreased()
    {
        $tamagotchi = $this->getARegularTamagotchi();
        $expectedValues = $this->getTamagotchiValues($tamagotchi);

        $tamagotchi->poop();
        $expectedValues['fullness']--;

        $this->assertEquals($expectedValues,$this->getTamagotchiValues($tamagotchi));

    }

    public function testTamagotchiTimePassedTirednessIsIncreasedHungrinessIsIncreasedAndHappinessIsDecreased()
    {
        $tamagotchi = $this->getARegularTamagotchi();
        $expectedValues = $this->getTamagotchiValues($tamagotchi);

        $tamagotchi->timePasses();
        $expectedValues['tiredness']++;
        $expectedValues['hungriness']++;
        $expectedValues['happiness']--;

        $this->assertEquals($expectedValues,$this->getTamagotchiValues($tamagotchi));

    }

}
