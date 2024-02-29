<?php
include "./behavior_interfaces/QuackBehavior.php";

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "i'm squeakin', squeak!\n";
    }
}
