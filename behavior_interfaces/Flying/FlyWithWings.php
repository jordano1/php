<?php

include "./behavior_interfaces/FlyBehavior.php";

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "i'm friggin Flying here!...\n";
    }
}
