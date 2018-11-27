<?php

namespace app\Models;

use database\connection\Connection;

class Menus
{
    private $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnection();
    }

    public function Select($id)
    {
        $sql = "SELECT * FROM `menus` WHERE category_id = '$id'";

        $result = mysqli_query($this->db, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
