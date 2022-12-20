<?php
    require_once(__DIR__.'/../core/CJ_Model.php');

    class TestModel extends CJ_Model {

        function __construct()
        {   
                parent::__construct();
        }

        // test function to check model is working
        function sayHello($name) {
            echo "Welcome to " . $name . "<br />";
        }
    }



?>