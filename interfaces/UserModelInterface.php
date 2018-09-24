<?php

namespace app\interfaces;


use app\models\UserModel;

interface UserModelInterface
{
    public function findById($id);

    public function findAll();

    public function save(UserModel $user);

    public function delete(UserModel $user);

}