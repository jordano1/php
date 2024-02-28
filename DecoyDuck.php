<?php

include "./behavior_interfaces/Flying/FlyNoWay.php";
include "./behavior_interfaces/Quacking/Squeak.php";

class DecoyDuck
{

    private $flyBehavior;
    private $quackBehavior;

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    public function noFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function display()
    {
        echo "decoy duck...";
    }
}
