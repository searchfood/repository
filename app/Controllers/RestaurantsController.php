<?php

namespace app\Controllers;

use app\Models\Restaurants;
use app\Controllers\ContributorsController;

class RestaurantsController
{
    private $model;
    private $contributor;

    public function __construct()
    {
        $this->model = new Restaurants(); 
        $this->contributor = new ContributorsController();
        
        session_start();        
        
        if (isset($_POST['restaurant_action'])) {
            switch ($_POST['restaurant_action']) {
                case 'auth':
                    $this->Auth();
                    break;
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
        $result = $this->model->Select($_SESSION['restaurant']);

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
                    if ($extension != "") {
                        $new_name = md5(time()) . $extension;
                        $directory = "public/img/upload/restaurants/";            
                        
                        if ($this->model->Update('restaurant_data', $_POST, $new_name)) {                                               

                            move_uploaded_file($_FILES['profile_picture']['tmp_name'], $directory . $new_name);
                            echo 'Ok';  
                                                        
                        } else {
                            echo 'Erro';
                        }
                    } else {
                        $this->model->Update('restaurant_data', $_POST, $this->Select('profile_picture'));
                    }                                    
                } else {

                }
                break;
            
            default:
                
                break;
        }        
    }

    public function Auth()
    {
        if ($this->model->Auth($_POST['email'], $_POST['password'])) {
            $row = $this->model->Auth($_POST['email'], $_POST['password'])->fetch_assoc();
            $_SESSION['restaurant'] = $row['id'];
            $this->redirect(URL.'/restaurante/dashboard');
        } else {
            $this->contributor->Auth($_POST['email'], $_POST['password']);
        }
        
    }

    public function close_session()
    {
        session_destroy();
        $this->redirect(URL.'/restaurante/login');
    }

    public function redirect($to)
    {
        header('Location: ' . $to);
    }
}

