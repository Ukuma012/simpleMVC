<?php
    require_once(__DIR__ . '/../core/CJ_Controller.php');
    require_once(__DIR__ . '/../model/Test.php');

    class Test extends CJ_Controller{
        function __construct()
        {
            $this->test_model = new TestModel();
        }

        function hello_get(...$args){
            $this->test_model->sayHello($args[0]);
            echo "Hello, World! from GET";
        }

        function hello_post(...$args){
            echo "Hello, Wrold! from POST";
        }

        function test_get(){
            $this->load_view('home', array('content'=>'<h1>This content is sent from controller</h1>'));
        }
    }
?>