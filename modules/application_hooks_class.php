<?php

    if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    class application_hooks_class
    {
        function after_entry_point_method($event, $arguments)
        {
            //logic
        }

        function after_load_user_method($bean, $event, $arguments)
        {
            //logic
        }

        function after_session_start_method($bean, $event, $arguments)
        {
            //logic
        }

        function handle_exception_method($event, $exception)
        {
            $exception->getMessage();
        }

        function server_round_trip_method($event, $arguments)
        {
            //display logic should check for $_REQUEST["to_pdf"]
        }

        function after_routing_method($event, $arguments)
        {
            //logic
        }
    }

?>
