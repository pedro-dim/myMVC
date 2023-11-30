<?php

//declare(strict_types=1);

namespace App\Routes;




class Route
{
    private static $routes = [];

    public static $dir_path = 'App\\Controllers\\';

    public static function GET($path, $controller, $method)
    {

        self::$routes[] = [
            'path' => $path,
            'controller' => self::$dir_path . $controller,
            'method' => $method,
            'httpMethod' => 'GET',
        ];
    }

    public static function POST($path, $controller, $method)
    {
        self::$routes[] = [
            'path' => $path,
            'controller' => self::$dir_path . $controller,
            'method' => $method,
            'httpMethod' => 'POST',
        ];
    }

    public static function dispatch($path, $httpMethod)
    {


        //dd('ok');
        foreach (self::$routes as $route) {
            if ($route['path'] === $path && $route['httpMethod'] === $httpMethod) {
                $controllerClass = $route['controller'];
                $method = $route['method'];


                // Instantiate the controller and call the method
                $controller = new $controllerClass();
                $controller->$method();
                return;
            }
        }

        // Handle 404 Not Found
        http_response_code(404);
        echo "404 Not Found<br>";
    }
}
