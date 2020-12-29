<?php

namespace App\classes;

class User
{
    // Properties
    public $name;
    public $planSubcribe;
    public $serverConnect;
    public $serverList;

    // Methods
    public function __construct()
    {
        $this->serverList = array();
        $this->planSubcribe = "No Plan";
        $this->name = "";
        $this->serverConnect = 0;
    }
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function subscribe($plan)
    {
        print "Action: Subscribing to the plan Basic Plan ...\n";
        sleep(5);
        $this->planSubcribe = $plan;
        $plan->welcome();
        // if ($plan instanceof BasicPlan) {
        //     $this->planSubcribe = $plan;
        //     $plan->welcome();
        // } elseif ($plan instanceof ProPlan) {
        //     $this->planSubcribe = $plan;
        //     $plan->welcome();
        // }
    }
    function connectServer($server)
    {
        sleep(5);
        print "Action: connecting Server " . $server->name . " ...\n";
        sleep(5);
        $limitExceed = false;


        if ($this->planSubcribe == "No Plan") {
            print " Error => User is not Subscribe to any plan \n\n\n";
        } else {
            $this->serverConnect++;
            if ($this->planSubcribe->name == "Basic Plan") {

                if ($this->serverConnect <= $this->planSubcribe->maxServer) {
                    array_push($this->serverList, $server);
                } else {
                    $this->serverConnect--;
                    $limitExceed = true;
                }
            } elseif ($this->planSubcribe->name  == "Pro Plan") {
                if ($this->serverConnect <= $this->planSubcribe->maxServer) {
                    array_push($this->serverList, $server);
                } else {
                    $this->serverConnect--;
                    $limitExceed = true;
                }
            }
            if ($limitExceed) {
                print " Error => User Exceed Server Limit allowed for the Plan " . $this->planSubcribe->name . " ! \n\n\n";
            } else {
                $str = '';

                print " Action => " . $server->name . " is connected ! \n\n";
                sleep(5);
                print "+----------------------------------- \n";
                print "User's Name ---> " . $this->name . "\n\n";
                print "Current Plan ---> " . $this->planSubcribe->name . "\n\n";
                print "Connected Server ---> ";
                foreach ($this->serverList as $key => $value) {
                    $str = ($str == '' ? '' : $str . ', ') . $value->name . " [" . $value->ipAddress . "]";
                }
                print $str . "\n";
                print "+-----------------------------------\n\n\n";
            }
        }
    }

    function unsubscribe()
    {
        print "Action: Cancelling Subscription to Plan Pro Plan \n\n";
        sleep(5);
        $this->serverList = array();
        $this->planSubcribe = "No Plan";
        $this->serverConnect = 0;
        print "You have successfully unsubscribed from plan Pro Plan. \n";
        print "Thank you for using Runcloud\n\n";
    }
}
