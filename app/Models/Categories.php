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
        $count = 'SELECT MAX(id) AS num_order FROM categories';
        $max = mysqli_query($this->db, $count);
        $row = $max->fetch_assoc();
        $order = $row['num_order'] + 1;

        $sql =  "INSERT INTO `categories` (`id`, `restaurant_id`, `category_name`, `ordination`)" .
                "VALUES (NULL, '" . $values['restaurant_id'] . "', '" . $values['category_name'] . "', '$order')";
        
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
        $sql = "SELECT * FROM `categories` WHERE restaurant_id = '$id' ORDER BY ordination DESC";

        $result = mysqli_query($this->db, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function Update($new_name, $id)
    {

        $sql = "UPDATE `categories` SET `category_name` = '$new_name' WHERE `id` = $id";

        $result = mysqli_query($this->db, $sql) or die($this->bd->error);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function Delete($id)
    {
        
    }
}
