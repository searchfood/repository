<?php

namespace app\Models;

use database\connection\Connection;

class Users
{
    private $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnection();
    }
}