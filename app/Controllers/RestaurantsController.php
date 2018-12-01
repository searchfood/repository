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
                case 'update_restaurant_data':
                    $this->Upload('restaurant_upload');
                    break;
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
        if ($this->model->Update($data, $_POST, NULL)){
            echo 'Ok';
        } else {
            echo 'Erro';
        }
    }

    public function Upload($upload)
    {
        switch ($upload) {
            case 'restaurant_upload':
                if (isset($_FILES['profile_picture'])) {
                    $extension = strtolower(substr($_FILES['profile_picture']['name'], -4));
                    $new_name = md5(time()) . $extension;
                    $directory = "public/img/upload/restaurants/";            
                    
                    if ($this->model->Update('restaurant_data', $_POST, $new_name)) {
                        move_uploaded_file($_FILES['profile_picture']['tmp_name'], $directory . $new_name);
                        echo 'Ok';
                    } else {
                        echo 'Erro';
                    }
                    
                } else {

                }
                break;
            
            default:
                
                break;
        }        
    }
}

