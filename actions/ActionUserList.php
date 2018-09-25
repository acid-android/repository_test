<?php

namespace app\actions;

use app\models\UserModel;

class ActionUserList
{
    private $connection;
    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function __invoke()
    {
        $model = new UserModel($this->connection);
        $data = $model->findAll();

        require ('views/user_list.php');
    }

}