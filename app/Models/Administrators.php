<?php

namespace app\Models;

use database\connection\Connection;

class Adminstrators
{
    private $db;

    public function __construct()
    {
        $connection = new Connection();
        $this->db = $connection->getConnection();
    }
}
