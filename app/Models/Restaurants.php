<?php

namespace app\Models;

use database\connection\Connection;

class Restaurants
{
    private $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnection();
    }

    public function Insert($values)
    {
        
    }

    public function Select($id)
    {
        $sql = "SELECT * FROM restaurants WHERE id = '$id'";

        $result = mysqli_query($this->db, $sql);

        return $result;
    }

    public function Update($values, $id)
    {
        
    }

    public function Delete($id)
    {
        
    }
}
