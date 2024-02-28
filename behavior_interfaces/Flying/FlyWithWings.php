<?php

include "./behavior_interfaces/FlyBehavior.php";

class FlyWithWings implements FlyWithWings
{
    public function fly()
    {
        echo "Flying...\n";
    }
}
