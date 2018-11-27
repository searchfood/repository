<?php

namespace app\Controllers;

use app\Models\Menus;

class MenusController
{
    private $model;

    public function __construct()
    {
        $this->model = new Menus();
    }

    public function Insert($values)
    {
        
    }

    public function Select($id)
    {
        $result = $this->model->Select($id);

        if ($result) {
            return $result;
        } else {
            return false;
        }
        
    }
}