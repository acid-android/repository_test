<?php

namespace app\interfaces;



interface UserModelInterface
{
    public function findById($id);

    public function findAll();

    public function save($user);

    public function delete($user);

}