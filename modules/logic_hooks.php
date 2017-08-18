<?php

    $hook_version = 1;
    $hook_array = Array();

    $hook_array['after_entry_point'] = Array();
    $hook_array['after_entry_point'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'after_entry_point example',

        //The PHP file where your class is located.
        'custom/modules/application_hooks_class.php',

        //The class the method is in.
        'application_hooks_class',

        //The method to call.
        'after_entry_point_method'
    );

    $hook_array['after_load_user'] = Array();
    $hook_array['after_load_user'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'after_load_user example',

        //tde PHP file where your class is located.
        'custom/modules/application_hooks_class.php',

        //tde class the method is in.
        'application_hooks_class',

        //tde method to call.
        'after_load_user_method'
    );

    $hook_array['after_session_start'] = Array();
    $hook_array['after_session_start'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'after_session_start example',

        //The PHP file where your class is located.
        'custom/modules/application_hooks_class.php',

        //The class the method is in.
        'application_hooks_class',

        //The method to call.
        'after_session_start_method'
    );

    $hook_array['handle_exception'] = Array();
    $hook_array['handle_exception'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'handle_exception example',

        //The PHP file where your class is located.
        'custom/modules/handle_exception_class.php',

        //The class the method is in.
        'handle_exception_class',

        //The method to call.
        'handle_exception_method'
    );

    $hook_array['server_round_trip'] = Array();
    $hook_array['server_round_trip'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'server_round_trip example',

        //The PHP file where your class is located.
        'custom/modules/application_hooks_class.php',

        //The class the method is in.
        'application_hooks_class',

        //The method to call.
        'server_round_trip_method'
    );

    $hook_array['after_routing'] = Array();
    $hook_array['after_routing'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'after_routing example',

        //The PHP file where your class is located.
        'custom/modules/logic_hooks_class.php',

        //The class the method is in.
        'logic_hooks_class',

        //The method to call.
        'after_routing_method'
    );

?>
