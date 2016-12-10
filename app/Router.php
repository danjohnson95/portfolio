<?php namespace App;

use Klein\Klein;

class Router extends Klein{

    public function respond($method, $path = '*', $callback = null){
        // Get the arguments in a very loose format

        if(gettype($callback) == "string"){
        	$bits = explode("@", $callback);
        	$class = "\\App\\Controllers\\".$bits[0];
        	$callback = [
        		new $class,
        		$bits[1]
    		];
        	// $class = "\\App\\Controllers\\".$ex[0];
        	// $class = new $class;
        	// $callback = $class->$ex[1];
        }

        return parent::respond($method, $path, $callback);

    }
	
}