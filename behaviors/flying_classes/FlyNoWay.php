<?php

include "./behaviors/FlyBehavior.php";

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo "no flying \n";
    }
}
