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

    public function save($user)
    {
        if(!$user->id){
            $stmt = $this->connection->prepare("INSERT INTO users(name, surname, email) VALUES (:name, :surname, :email) ");
            $stmt->execute([
                'name' => $user->name,
                'surname' => $user->surName,
                'email' => $user->email
            ]);

        } else {
            $stmt = $this->connection->prepare("UPDATE users SET name = :name, surname = :surname, email = :email WHERE id = :id");
            $stmt->execute([
                'id' => $user->id,
                'name' => $user->name,
                'surname' => $user->surname,
                'email' => $user->email
            ]);

        }
    }
    public function delete($user)
    {
        $stmt = $this->connection->prepare("DELETE FROM users WHERE id = :id");
        $stmt->execute(['id' => $user->id]);
    }

}