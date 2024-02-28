<?php

include "CyborgDuck.php";
include "MallardDuck.php";
include "RubberDuck.php";
include "DecoyDuck.php";

class Duck
{
    public function swim()
    {
        echo "swimming...\n";
    }

    public function quack()
    {
        echo "quack...\n";
    }

    public function display()
    {
        echo "This is a duck...\n";
    }
}

$duck = new Duck();
$duck->quack();

$mallard = new MallardDuck();
$mallard->display();

$cyborg = new CyborgDuck();
$cyborg->display();

$decoy = new DecoyDuck();
$decoy->display();
$decoy->noFly();
