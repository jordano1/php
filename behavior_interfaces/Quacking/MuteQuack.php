<?php
include "./behavior_interfaces/QuackBehavior.php";

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "cannot quack!\n";
    }
}
