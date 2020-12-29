<?php

namespace App\Classes;

abstract class Plan
{
    public $name;
    public $maxServer;
    abstract function welcome();
}
