<?php

    $dependencies['m1234_Student']['names_value'] = array(
        'hooks' => array("edit", "view"), //not including save so that the value isn't stored in the DB
        'trigger' => 'true', //Optional, the trigger for the dependency. Defaults to 'true'.
        //'triggerFields' => array('status'), //unneeded for this example as its not field triggered
        'onload' => true,
        'actions' => array(
            array(
                'name' => 'SetValue',
                'params' => array(
                    'target' => 'last_name',
                    'value' => '$first_name'
                )
            ),
            array(
                'name' => 'ReadOnly',
                'params' => array(
                    'target' => 'last_name',
                    'value' => 'true',  //Set to true instead of a formula because its always read-only
                ),
            )
        )
    );
