<?php

namespace app\Controllers;

use app\Models\Users;

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new Users();
    }
}