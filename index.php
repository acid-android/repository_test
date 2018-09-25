<?php
namespace app;
use app\db\PDOConnection;

spl_autoload_register(function($class)
{
    $path = __DIR__ .'/'. str_replace('app\\','', $class).'.php';
    $path = str_replace('\\', '/', $path);
    require $path;
});

$config = require_once ('config/config.php');

$connection = new PDOConnection($config);

$pdo = $connection->getConnection();


Route::start($pdo);
