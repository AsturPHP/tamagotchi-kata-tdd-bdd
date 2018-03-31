<?php


use App\Tamagotchi;
use Behat\Behat\Context\Context;
use PHPUnit\Framework\TestCase;

class FeatureContext extends TestCase implements Context
{
    /** @var Tamagotchi $tamagotchi */
    private $tamagotchi;


    const INITIAL_HUNGRINESS = 50;
    const INITIAL_FULLNESS = 50;
    const INITIAL_HAPPINESS = 50;
    const INITIAL_TIREDNESS = 50;

    /**
     * @Given I have a Tamagotchi
     */
    public function iHaveATamagotchi()
    {
        $this->tamagotchi = new Tamagotchi(self::INITIAL_HUNGRINESS, self::INITIAL_FULLNESS, self::INITIAL_HAPPINESS, self::INITIAL_TIREDNESS);

    }

    /**
     * @When I feed it
     */
    public function iFeedIt()
    {
        $this->tamagotchi->feed();
    }

    /**
     * @When I play with it
     */
    public function iPlayWithIt()
    {
        $this->tamagotchi->play();
    }

    /**
     * @When I put it to bed
     */
    public function iPutItToBed()
    {
        $this->tamagotchi->toBed();
    }

    /**
     * @When I make it poop
     */
    public function iMakeItPoop()
    {
        $this->tamagotchi->poop();
    }

    /**
     * @When time passes
     */
    public function timePasses()
    {
        $this->tamagotchi->timePasses();
    }

    /**
     * @Then it's hungriness is decreased
     */
    public function itsHungrinessIsDecreased()
    {
        $this->assertLessThan(self::INITIAL_HUNGRINESS, $this->tamagotchi->getHungriness());
    }

    /**
     * @Then it's hungriness is increased
     */
    public function itsHungrinessIsIncreased()
    {
        $this->assertGreaterThan(self::INITIAL_HUNGRINESS, $this->tamagotchi->getHungriness());
    }


    /**
     * @Then it's fullness is increased
     */
    public function itsFullnessIsIncreased()
    {
        $this->assertGreaterThan(self::INITIAL_FULLNESS, $this->tamagotchi->getFullness());
    }

    /**
     * @Then it's fullness is decreased
     */
    public function itsFullnessIsDecreased()
    {
        $this->assertLessThan(self::INITIAL_FULLNESS, $this->tamagotchi->getFullness());
    }

    /**
     * @Then it's tiredness is increased
     */
    public function itsTirednessIsIncreased()
    {
        $this->assertGreaterThan(self::INITIAL_TIREDNESS, $this->tamagotchi->getTiredness());
    }

    /**
     * @Then it's tiredness is decreased
     */
    public function itsTirednessIsDecreased()
    {
        $this->assertLessThan(self::INITIAL_TIREDNESS, $this->tamagotchi->getTiredness());
    }

    /**
     * @Then it's happiness is increased
     */
    public function itsHappinessIsIncreased()
    {
        $this->assertGreaterThan(self::INITIAL_HAPPINESS, $this->tamagotchi->getHappiness());
    }

    /**
     * @Then it's happiness is decreased
     */
    public function itsHappinessIsDecreased()
    {
        $this->assertLessThan(self::INITIAL_HAPPINESS, $this->tamagotchi->getHappiness());
    }








}