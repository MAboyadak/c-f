<?php

namespace App\Router;

class Router
{
    private static $routes = [];

    public function resolve()
    {
        include_once 'routes.php';
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $pos = strpos($path,'/',1);
        $endPoint = substr($path, $pos);
        
        // echo '<pre>';
        // echo $path.'<br>';
        // print($endPoint).'<br>';
        
        if(array_key_exists($endPoint,self::$routes[$method])){
            
            $callback = self::$routes[$method][$endPoint];            
            
            if(is_callable($callback)){
                return call_user_func($callback);
            }

            $controllerObject = new $callback[0]();
            $controllerMethod = $callback[1];
            return $controllerObject->$controllerMethod();
        }else{
            echo 'Error 404 Not Found URL';
        }
    }

    public static function get($uri, $callback)
    {
        self::$routes['get'][$uri] = $callback;
    }

    public static function post($uri, $callback)
    {
        self::$routes['post'][$uri] = $callback;
    }
    

}