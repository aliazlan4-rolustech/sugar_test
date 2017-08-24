<?php

    class hookClass
    {
        function hookMethod($bean, $event, $arguments)
        {
            $GLOBALS['log']->fatal("Azlan: " . $bean->first_name);
            $bean->title = "No Name";
        }
    }
?>
