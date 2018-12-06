<?php

namespace app\Controllers;

use app\Models\Categories;

class CategoriesController
{
    private $model;

    public function __construct()
    {
        $this->model = new Categories();

        if (isset($_POST['category_action'])) {
            switch ($_POST['category_action']) {
                case 'insert':
                    $this->Insert($_POST); 
                    break;
                case 'update':
                    $this->Update($_POST); 
                    break;
                
                default:  
                    // var_dump($_POST);               
                    break;
            }
        }
    }

    public function Insert($values)
    {
        $category = $this->model->Select($_POST['restaurant_id']);

        if ($category != false) {
            for ($i=0; $i < mysqli_num_rows($category); $i++) { 
                $category_existing = $category->fetch_assoc();
                if ($_POST['category_name'] == $category_existing['category_name']) {
                    $exist = true;
                }
            }
        }

        if (!$exist) {
            if ($this->model->Insert($values)) {
                echo 'Cadastro com Sucesso!';
            } else {
                echo 'Cadastro com Erro!';
            }            
        } else {
            echo 'Categoria já existe!';
        }
        
    }

    public function Update($values)
    {
        $category = $this->model->Select($values['restaurant_id']);

        if ($category != false) {
            for ($i=0; $i < mysqli_num_rows($category); $i++) { 
                $category_existing = $category->fetch_assoc();
                if ($values['category_name_update'] == $category_existing['category_name']) {
                    $exist = true;
                }
            }
        }

        if (!$exist) {
            if ($this->model->Update($values['category_name_update'], $values['category_id'])){
                echo 'Ok';
            } else {
                echo 'Erro';
            }            
        } else {
            echo 'Categoria já existe!';
        }                
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
