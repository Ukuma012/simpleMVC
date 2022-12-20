<?php
// TODO create autoloader
require_once(__DIR__ . '/controller/Test.php');

    function getArgumentStart($uri){
        foreach($uri as $key => $value){
            if($value == 'index.php'){
                if($key == count($uri) - 1) return -1;
                return $key+1;
            }
        }
    }


    function main(){
        // localhost/Appname/index.php/ControllerName/functionName/args.../args../moreargs/
        // http://localhost:8082/simplemvc/index.php/Test/hello
        // TODO: if there is no such directory, show 404 page

        $uri = parse_url($_SERVER['REQUEST_URI']);

        // Converting url to array
        $parameters = explode('/', $uri['path']);

        // get the start where controller starts
        $start = getArgumentStart($parameters);


        if($start != -1) {
            $controller_name = $parameters[$start];

            $function_name = $parameters[$start+1] . "_" . strtolower($_SERVER['REQUEST_METHOD']);

            // now we can pack the rest of the values as arguments.
            // for that we will create a simple array
            $args = array();

            // setting the correct index
            $start += 2;

            for(;$start<count($parameters);$start++){
                array_push($args, $parameters[$start]);
            }

            call_user_func_array(array(new $controller_name, $function_name), $args);

        } else {
        
            echo "404 not found";
        }

    }
    

    main();
    

    
?>