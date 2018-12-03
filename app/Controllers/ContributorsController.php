<?php 

namespace app\Controllers;

use app\Models\Contributors;

class ContributorsController
{
    private $model;

    public function __construct()
    {
        $this->model = new Contributors();
    }

    public function Auth($email, $password)
    {
        if ($this->model->Auth($_POST['email'], $_POST['password'])) {
            $row = $this->model->Auth($_POST['email'], $_POST['password'])->fetch_assoc();
            $_SESSION['restaurant'] = $row['restaurant_id'];
            $_SESSION['contributor'] = $row['id'];
            $this->redirect(URL.'/restaurante/dashboard');
        } else {
            echo 'Erro';
        }
        
    }
}
