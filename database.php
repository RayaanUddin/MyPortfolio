<?php

$db = new mysqli('localhost', 'RayaanUddin', 'Rayaan10', 'portfolio');

$posts = array();

class Account {
    public $fname;
    public $lname;
    public $email;
    public $id;

    public function __construct() {
        global $db;
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
    }

    public function register($fname, $lname, $email, $password) {
        global $db;
        $sql = "INSERT INTO accounts (fname, lname, email, password) VALUES ('".$fname."', '".$lname."', '".$email."', '".$password."')";
        $result = $db->query($sql);
        echo 'Account created';
    }

    public function login($email, $password) {
        global $db;
        $sql = "SELECT * FROM accounts WHERE email = '".$email."' AND password = '".$password."'";
        $result = $db->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $this->fname = $row["fname"];
            $this->lname = $row["lname"];
            $this->email = $row['email'];
            $this->id = $row['id'];

            return true;
        } else {
            return false;
        }
    } 
}

class Post {
    public $title;
    public $content;
    public $authorId;
    public $date;
    public $id;
    public $authorFullname;

    public function __construct($title, $content, $author, $date, $id) {
        $this->title = $title;
        $this->content = $content;
        $this->authorId = $author;
        $this->date = $date;
        $this->id = $id;

        global $db;
        $sql = "SELECT fname, lname FROM accounts WHERE id = '".$author."'";
        $result = $db->query($sql);
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $this->authorFullname = $row["fname"]." ".$row["lname"];
        } else {
            $this->authorFullname = "Unknown author";
        }
    }
}

function updatePosts() {
    global $db;
    global $posts;
    $sql = "SELECT * FROM blog ORDER BY date DESC";
    $result = $db->query($sql);
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dateFromSQL = strtotime($row['date']);
            $date = date('dS F Y | H:i', $dateFromSQL);
            $post = new Post($row['title'], $row['content'], $row['author'], $date, $row['id']);
            array_push($posts, $post);
        }
    }

    return $posts;
}

function addPost($title, $content, $author) {
    global $db;
    global $post;
    $sql = "INSERT INTO blog (title, content, author) VALUES ('".$title."', '".$content."', '".$author."')";
    if ($db->query($sql) == true) {
        echo "Post added";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
        echo $author;
    }
}

?>