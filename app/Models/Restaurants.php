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

    public function Update($data, $values, $upload)
    {
        switch ($data) {
            case 'restaurant_data':            
                $sql =  "UPDATE `restaurants` SET"                                           . 
                        "   `restaurant_name`           = '"    . $values['restaurant_name'] .                          
                        "', `address`                   = '"    . $values['address']         . 
                        "', `neighborhood`              = '"    . $values['neighborhood']    . 
                        "', `city`                      = '"    . $values['city']            . 
                        "', `state`                     = '"    . $values['state']           . 
                        "', `cep`                       = '"    . $values['cep']             . 
                        "', `profile_picture`           = '"    . $upload                    . 
                        "' WHERE `restaurants`.`id`     = "     . $values['restaurant_id'];
                break;
            case 'owner_data':            
                $sql =  "UPDATE `restaurants` SET"                                         . 
                        "   `owner_name`                = '"    . $values['owner_name']    . 
                        "', `owner_email`               = '"    . $values['owner_email']   .                          
                        "', `owner_phone`               = '"    . $values['owner_phone']   . 
                        "' WHERE `restaurants`.`id`     = "     . $values['restaurant_id'];
                break;
            
            default:
                # code...
                break;
        }

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

    public function Auth($email, $password, $table)
    {
        $encrypted_password = md5($password);

        if ($table == 'restaurants') {
            $sql = "SELECT * FROM `restaurants` WHERE `email` = '$email' AND `password` = '$encrypted_password'";
        } else if ($table == 'contributors') {
            $sql = "SELECT * FROM `contributors` WHERE `email` = '$email' AND `password` = '$encrypted_password'";
        }
                
        $result = mysqli_query($this->db, $sql);

        if (mysqli_num_rows($result) == 1) {
            return $result;
        } else {
            return false;
        }
    }
}
