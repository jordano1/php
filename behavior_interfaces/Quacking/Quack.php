<?php
include "./behavior_interfaces/QuackBehavior.php";

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "i'm friggen quackin' here!\n";
    }
}
