<?php

namespace App\classes;

abstract class Plan
{
    public $name;
    public $maxServer;
    abstract function welcome();
}
