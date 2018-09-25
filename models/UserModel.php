<?php

namespace app\models;


class UserModel extends PDOUserModel
{
    public $id;
    public $name;
    public $surName;
    public $email;


    public function save($user)
    {
        parent::save($user);
    }


}