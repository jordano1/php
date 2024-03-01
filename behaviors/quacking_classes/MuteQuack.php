<?php

include "./behaviors/QuackBehavior.php";

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "cannot quack bro\n";
    }
}
