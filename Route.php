<?php
namespace app;

class Route
{
    static function start($connection)
    {
        $action_name = '';

        $routes = explode('/', $_SERVER['REQUEST_URI']);







        if ( !empty($routes[count($routes) - 1]) )
        {
            $action_name = $routes[count($routes) - 1];

            $action_name = str_replace('_', ' ', $action_name);


            $action_name = ucwords($action_name);

            $action_name = str_replace(' ', '', $action_name);

        }
        $action_file = 'actions/Action'.$action_name.'.php';
        $action_class = "app\actions\Action{$action_name}";

        if(file_exists($action_file))
        {
            require $action_file;

            $controller = new $action_class($connection);

            $controller();
        }
        else
        {
            Route::ErrorPage404();
        }
    }

    static function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}