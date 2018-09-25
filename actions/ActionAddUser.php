<?php
/**
 * Created by PhpStorm.
 * User: vladimirvolkov1
 * Date: 25.09.18
 * Time: 16:13
 */

namespace app\actions;


use app\models\UserModel;

class ActionAddUser
{
    private $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function __invoke()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $model = new UserModel($this->connection);
            $model->name = $_POST['name'];
            $model->surName = $_POST['surname'];
            $model->email = $_POST['email'];

            $model->save($model);

            header('Location: http://localhost/repository_test/user_list');
        }
        require ('views/add_user.php');
    }


}