<?php

class Database {
    private $server_name = "localhost";
    private $username = "root";
    private $password = "root";     // For MAMP users, password is "root"
    private $db_name = "the_company";
    protected $conn;

    public function __construct(){
        $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);

        if($this->conn->connect_error){
            die("Unable to connect to database " . $this->db_name . ": " . $this->conn->connect_error);
        }
    }
}

//  $conn is declared as protected so other inheriting classes can use it
//  $this->conn --- object
//  $connect_error --- property. a member of class mysqli. holds a String value of the connection error