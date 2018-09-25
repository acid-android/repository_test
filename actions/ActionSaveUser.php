<?php
/**
 * Created by PhpStorm.
 * User: vladimirvolkov1
 * Date: 25.09.18
 * Time: 16:47
 */

namespace app\actions;


use app\models\UserModel;

class ActionSaveUser
{

    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function __invoke()
    {
        $model = new UserModel($this->connection);
        $model->name = $_POST['name'];
        $model->surName = $_POST['surname'];
        $model->email = $_POST['email'];

        $model->save($model);

        header('Location: http://localhost/repository_test/user_list');
    }

}