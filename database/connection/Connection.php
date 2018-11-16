<?php

namespace database\connection;

use config\Settings;

class Connection {

    private $mysqli;
    private $settings;

    public function __construct() {
        $this->settings = new Settings();
        $this->mysqli = new \mysqli(HOST, USER, PASSWORD, DB);
        if ($this->mysqli->connect_errno) {
            die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
    }

    public function getConnection() {
        return $this->mysqli;
    }

}