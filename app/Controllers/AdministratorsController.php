<?php

namespace app\Controllers;

use app\Models\Administrators;

class AdministratorsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Administrators();
    }
}