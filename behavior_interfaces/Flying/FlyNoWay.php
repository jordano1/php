<?php

include "./behavior_interfaces/FlyBehavior.php";

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "cannot fly\n";
    }
}
