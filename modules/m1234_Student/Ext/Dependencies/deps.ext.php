<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/m1234_Student/Ext/Dependencies/example.php


$dependencies['m1234_Student']['example_depn'] = array(
'hooks' => array("all"),
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

?>
<?php
// Merged from custom/Extension/modules/m1234_Student/Ext/Dependencies/readonly.php


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

?>
