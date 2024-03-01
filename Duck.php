<?php

include "./behaviors/flying_classes/FlyNoWay.php";
include "./behaviors/quacking_classes//MuteQuack.php";

class Duck
{
    public $flyBehavior;
    public $quackBehavior;

    public function __construct(QuackBehavior $quackBehavior, flyBehavior $flyBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior = $flyBehavior;
    }

    public function flyBehavior()
    {
        $this->flyBehavior->fly();
    }

    public function quackBehavior()
    {
        $this->quackBehavior->quack();
    }
}

$quackBehavior = new MuteQuack();
$flyBehavior = new FlyNoWay();
$duck = new Duck($quackBehavior, $flyBehavior);
$duck->flyBehavior();
$duck->quackBehavior();
