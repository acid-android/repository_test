<?php

namespace app\models;


use app\interfaces\UserModelInterface;

class PDOUserModel implements UserModelInterface
{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;

    }


    public function findById($id)
    {
        $stmt = $this->connection->query("SELECT * FROM users WHERE id={$id}");
        $result = [];

        while ($row = $stmt->fetch()){
            $result[] = $row;
        }

        return $result;
    }

    public function findAll()
    {
        $stmt = $this->connection->query("SELECT * FROM users");
        $result = [];

        while ($row = $stmt->fetch()){
            $result[] = $row;
        }

        return $result;
    }

    public function save(UserModel $user)
    {
        // TODO: Implement save() method.
    }
    public function delete(UserModel $user)
    {
        // TODO: Implement delete() method.
    }

}