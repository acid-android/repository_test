<?php

namespace app\db;


class PDOConnection
{
    private $connection;

    public function __construct($config)
    {
        $pdoConfig = $config['db']['PDO'];
        $this->connection = new \PDO($pdoConfig['dsn'], $pdoConfig['user'], $pdoConfig['password'], $pdoConfig['options']);
    }

    public function getConnection(){
        return $this->connection;
    }

}