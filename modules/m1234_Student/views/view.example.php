<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class <module>ViewExample extends ViewDetail
{
    function <module>ViewExample()
    {
        parent::ViewDetail();
    }
    function display()
    {
        echo 'Example View';
    }
}
?>
