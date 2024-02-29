<?php

include "./behavior_interfaces/Quacking/Squeak.php";
include "./behavior_interfaces/Flying/FlyNoWay.php";

class DecoyDuck
{
    public $quackBehavior;
    public $flyBehavior;

    public function __construct(QuackBehavior $quackBehavior, FlyBehavior $flyBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior = $flyBehavior;
    }

    public function quackBehavior()
    {
        $this->quackBehavior->quack();
    }
}

$flyBehavior = new FlyNoWay();
$quackBehavior = new Squeak();
$decoyDuck = new DecoyDuck($quackBehavior, $flyBehavior);
$decoyDuck->quackBehavior();
