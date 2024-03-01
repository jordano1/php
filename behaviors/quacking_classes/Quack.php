<?php

include "./behaviors/QuackBehavior.php";

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "quacking bro\n";
    }
}
