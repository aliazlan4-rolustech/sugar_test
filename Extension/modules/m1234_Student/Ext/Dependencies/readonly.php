<?php

    $dependencies['m1234_Student']['readonly_fields'] = array(
        'hooks' => array("edit"),
        'trigger' => 'equal($do_not_call,true)',
        //Optional, the trigger for the dependency. Defaults to 'true'.
        'triggerFields' => array('do_not_call'),
        'onload' => true,
        //Actions is a list of actions to fire when the trigger is true
        // You could list multiple fields here each in their own array under 'actions'
        'actions' => array(
            array(
                'name' => 'ReadOnly',
                //The parameters passed in will depend on the action type set in 'name'
                'params' => array(
                    'target' => 'phone_mobile',
                    'value' => 'true',
                ),
            ),
        ),
        'notActions' => array(
            array(
                'name' => 'ReadOnly',
                //The parameters passed in will depend on the action type set in 'name'
                'params' => array(
                    'target' => 'phone_mobile',
                    'value' => 'false',
                ),
            ),
        ),
    );
