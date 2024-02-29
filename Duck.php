<?php
include "./behavior_interfaces/Quacking/Quack.php";
include "./behavior_interfaces/Flying/FlyWithWings.php";

class Duck
{
    public $quackBehavior;
    public $flyBehavior;

    public function __construct(QuackBehavior $quackBehavior, FlyBehavior $flyBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        $this->flyBehavior = $flyBehavior;
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
    }
}

$quackBehavior = new Quack();
$flyBehavior = new FlyWithWings();
$duck = new Duck($quackBehavior, $flyBehavior);
$duck->performQuack();
$duck->performFly();
