<?php

include "./behaviors/FlyBehavior.php";

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        echo "Flying with wings\n";
    }
}
