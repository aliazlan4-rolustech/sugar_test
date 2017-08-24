<?php

    class hookClass
    {
        function hookMethod($bean, $event, $arguments)
        {
            $GLOBALS['log']->fatal("Azlan: In hook method");
            //If relationship is loaded
            if ($bean->load_relationship('m1234_Class'))
            {
                $GLOBALS['log']->fatal("Azlan: In if");
                //Fetch related beans
                $relatedBeans = $bean->$link->getBeans();

                $GLOBALS['log']->fatal("Azlan: " . count($relatedBeans));
            }
        }
    }
?>
