<?php

namespace app\Models;

use database\connection\Connection;

class Contributors
{
    private $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnection();
    }

   public function Auth($email, $password)
    {
        $encrypted_password = md5($password);

        $sql = "SELECT * FROM `contributors` WHERE `email` = '$email' AND `password` = '$encrypted_password'";
                
        $result = mysqli_query($this->db, $sql);

        if (mysqli_num_rows($result) == 1) {
            return $result;
        } else {
            return false;
        }
    }
}
