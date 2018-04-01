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

    public function __construct($hungriness = 0, $fullness = 0, $happiness = 0, $tiredness = 0)
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
        $this->safeIncreased('happiness');
        $this->safeIncreased('tiredness');

    }

    public function feed()
    {
        $this->safeDecreased('hungriness');
        $this->safeIncreased('fullness');


    }

    public function toBed()
    {
        $this->safeDecreased('tiredness');
    }


    public function poop()
    {
        $this->safeDecreased('fullness');
    }


    public function timePasses()
    {
        $this->safeIncreased('tiredness');
        $this->safeIncreased('hungriness');
        $this->safeDecreased('happiness');

    }

    private function safeDecreased($key)
    {
        $this->{$key} = $this->{$key} > 0  ? $this->{$key} - 1 : 0;
    }

    private function safeIncreased($key)
    {
        $this->{$key} = $this->{$key} < 100 ? $this->{$key} + 1 : 100;

    }


}