<?php

$dependencies['m1234_Student']['example_depn'] = array(
'hooks' => array("edit"),
//Trigger formula for the dependency. Defaults to 'true'.
'trigger' => 'true',
'triggerFields' => array('first_name'),
'onload' => true,
//Actions is a list of actions to fire when the trigger is true
'actions' => array(
    array(
        'name' => 'SetRequired', //Action type
        //The parameters passed in depend on the action type
        'params' => array(
            'target' => 'phone_mobile',
            'label'  => 'LBL_MOBILE_PHONE', //normally <field>_label
            'value' => 'equal($first_name, "Closed")', //Formula
        ),
    ),
),
);
