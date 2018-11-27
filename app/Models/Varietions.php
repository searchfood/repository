<?php

namespace app\Models;

use database\connection\Connection;

class Varietions
{
    private $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnection();
    }
}