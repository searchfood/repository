<?php

namespace app\Controllers;

use app\Models\Restaurants;

class RestaurantsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Restaurants();  
        
        if (isset($_POST['restaurant_action'])) {
            switch ($_POST['restaurant_action']) {
                case 'update_owner_data':
                    $this->Update('owner_data');
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }    

    public function Select($col)
    {
        $result = $this->model->Select('2');

        $row = $result->fetch_assoc();

        return $row["$col"];
    }

    public function Update($data)
    {
        if ($this->model->Update($data, $_POST)){
            echo 'Ok';
        } else {
            echo 'Erro';
        }
    }
}

