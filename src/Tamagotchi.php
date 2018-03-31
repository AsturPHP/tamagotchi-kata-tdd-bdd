<?php

namespace App;

class Tamagotchi
{
    /** @var int */
    private $hungriness;
    /** @var int */
    private $fullness;
    /** @var int */
    private $happiness;
    /** @var int */
    private $tiredness;

    public function __construct($hungriness=0, $fullness=0, $happiness=0, $tiredness=0)
    {
        $this->hungriness = $hungriness;
        $this->fullness = $fullness;
        $this->happiness = $happiness;
        $this->tiredness = $tiredness;
    }


    public function getHungriness()
    {
        return $this->hungriness;
    }

    public function getFullness()
    {
        return $this->fullness;
    }

    public function getHappiness()
    {
        return $this->happiness;
    }

    public function getTiredness()
    {
        return $this->tiredness;
    }



    public function play()
    {

    }

    public function feed()
    {

    }

    public function toBed()
    {

    }


    public function poop()
    {

    }


    public function timePasses()
    {

    }



}