<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("clients/base/api/PingApi.php");

class CustomPingApi extends PingApi
{
    public function registerApiRest()
    {
        //in case we want to add additional endpoints
        return parent::registerApiRest();
    }

    //override to modify the ping function of the ping endpoint
    public function ping($api, $args)
    {
        $result = parent::ping($api, $args);

        //append the current timestamp
        return $result . ' ' . time() . ' Azlan was Here';
    }
}
