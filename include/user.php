<?php
require_once('database.php');

class User{
    public $id;
    public $username;
    public $first_name;
    public $last_name;
    public $password;
    public $email;

    public static function find_all(){

    }

    public static function find_by_sql($sql=""){
        global $database;
        $result_set=$database->query($sql);

        $object_array=array();
    

    }


    

}


?>