<?php

namespace app\Controllers;

use app\Models\Varietions;

class VarietionsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Varietions();
    }
}