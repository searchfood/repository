<?php

namespace app\Controllers;

use app\Models\Restaurants;

class RestaurantsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Restaurants();        
    }

    public function Select($col)
    {
        $result = $this->model->Select('2');

        $row = $result->fetch_assoc();

        return $row["$col"];
    }
}

