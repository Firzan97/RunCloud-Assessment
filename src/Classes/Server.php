<?php

namespace App\classes;

class Server
{
    // Properties
    public $name;
    public $ipAddress;
    public $serverAvailable;


    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_server($server)
    {
        $this->server = $server;
    }
    function get_server()
    {
        return $this->server;
    }
}
