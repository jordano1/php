<?php

include "./behavior_interfaces/QuackBehavior.php";


class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo "Squeak\n";
    }
}
