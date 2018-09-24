<?php
namespace app;
use app\db\PDOConnection;
use app\models\UserModel;

spl_autoload_register(function($class)
{
    $path = __DIR__ .'/'. str_replace('app\\','', $class).'.php';
    $path = str_replace('\\', '/', $path);
    require $path;
});

$config = require_once ('config/config.php');

$connection = new PDOConnection($config);

$pdo = $connection->getConnection();

$user = new UserModel($pdo);

$result = $user->findAll();

echo '<pre>';
var_dump($result);
