<?php

namespace App\Classes;

class ProPlan extends Plan
{

    public function __construct()
    {
        $this->name = "Pro Plan";
        $this->maxServer = 1000000;
    }

    function welcome()
    {
        print "Subscribed to plan Pro Plan \n\n";
    }
}
