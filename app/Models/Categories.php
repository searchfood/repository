<?php

namespace app\Models;

use database\connection\Connection;

class Categories
{
    private $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnection();
    }

    public function Insert($values)
    {
        $sql =  "INSERT INTO `categories` (`id`, `restaurant_id`, `category_name`)" .
                "VALUES (NULL, '" . $values['restaurant_id'] . "', '" . $values['category_name'] . "')";
        
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        if (!$result) {
            return false;
        } else {
            return mysqli_stmt_insert_id($stmt);
        }
    }

    public function Select($id)
    {
        $sql = "SELECT * FROM `categories` WHERE restaurant_id = '$id'";

        $result = mysqli_query($this->db, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function Update($values, $id)
    {
        
    }

    public function Delete($id)
    {
        
    }
}
