<?php

namespace App\classes;

class Server
{
    // Properties
    public $name;
    public $ipAddress;


    // Methods
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function setServer($server)
    {
        $this->server = $server;
    }
    function getServer()
    {
        return $this->server;
    }
}
