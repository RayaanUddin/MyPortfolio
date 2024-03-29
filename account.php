<?php

class Account {

    private $db;
    public $fname;
    public $lname;

    public function __construct() {
        $this->db = new mysqli('localhost', 'RayaanUddin', 'Rayaan10', 'portfolio');
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    private function exist($email) {
        $sql = "SELECT * FROM accounts WHERE email = '".$email."'";
        $result = $this->db->query($sql);
        if ($result->num_rows === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function register($fname, $lname, $email, $password) {
        $sql = "INSERT INTO accounts (fname, lname, email, password) VALUES ('".$fname."', '".$lname."', '".$email."', '".$password."')";
        $result = $this->db->query($sql);
        echo 'Account created';
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM accounts WHERE email = '".$email."' AND password = '".$password."'";
        $result = $this->db->query($sql);


        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $fname = $row['fname'];
            $lname = $row['lname'];
            $this->fname = $fname;
            $this->lname = $lname;
            return true;
        } else {
            return false;
        }
    }
        

        
}

?>