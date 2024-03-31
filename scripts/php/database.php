<?php
session_start();
$db = new mysqli('localhost', 'RayaanUddin', 'Rayaan10', 'portfolio');

$posts = array();

$permission_levels = array(
    0 => "User",
    1 => "Admin"
);


class Account {
    public $fname;
    public $lname;
    public $email;
    public $id;
    private $permission;

    public function __construct() {
        global $db;
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
    }

    public function getFullname() {
        return $this->fname." ".$this->lname;
    }

    private function accountExists($email) {
        global $db;
        $sql = "SELECT * FROM accounts WHERE email = '".$email."'";
        $result = $db->query($sql);
        if ($result->num_rows === 1) {
            return true;
        } else {
            return false;
        }
    }

    public function register($fname, $lname, $email, $password, $perm) {
        global $db;
        if ($this->accountExists($email)) {
            return false;
        } else {
            $sql = "INSERT INTO accounts (fname, lname, email, password, permission) VALUES ('".$fname."', '".$lname."', '".$email."', '".$password."', '".$perm."')";
            if ($db->query($sql)) {
                return true;
            } else {
                return false;
            }
        }
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
            $this->id = $row['accountId'];
            $this->permission = $row['permission'];

            return true;
        } else {
            return false;
        }
    }

    public function isAdmin() {
        global $permission_levels;
        if ($permission_levels[$this->permission] == "Admin") {
            return true;
        } else {
            return false;
        }
    }
}

class Comment {
    public $comment;
    public $accountId;
    public $date;
    public $authorFullname;
    public $id;

    public function __construct($comment, $author, $date, $id) {
        $this->comment = $comment;
        $this->accountId = $author;
        $this->date = strtotime($date);
        $this->id = $id;

        global $db;

        // Get author of comment name
        $sql = "SELECT fname, lname FROM accounts WHERE accountId = '".$author."'";
        $result = $db->query($sql);
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $this->authorFullname = $row["fname"]." ".$row["lname"];
        } else {
            $this->authorFullname = "Unknown author";
        }
    }

    public function get_date_str() {
        $datestr = "";

        $yeardiff = date('Y') - date('Y', $this->date);
        $monthdiff = date("m") - date("m", $this->date);
        if ($monthdiff < 0) {
            $yeardiff--;
            $monthdiff+=12;
        }
        $datediff = date("d") - date("d", $this->date);
        if ($datediff < 0) {
            $monthdiff--;
            $datediff+=30;
        }
        $hourdiff = date("H") - date("H", $this->date);
        if ($hourdiff < 0) {
            $datediff--;
            $hourdiff+=24;
        }
        $minutediff = date("i") - date("i", $this->date);
        if ($minutediff < 0) {
            $hourdiff--;
            $minutediff+=60;
        }
        $seconddiff = date("s") - date("s", $this->date);
        if ($seconddiff < 0) {
            $minutediff--;
            $seconddiff+=60;
        }
        if ($yeardiff > 0) {
            $datestr .= $yeardiff." year".($yeardiff > 1 ? "s " : " ");
        } elseif ($monthdiff > 0) {
            $datestr .= $monthdiff." month".($monthdiff > 1 ? "s " : " ");
        } elseif ($datediff > 0) {
            $datestr .= $datediff." day".($datediff > 1 ? "s " : " ");
        } elseif ($hourdiff > 0) {
            $datestr .= $hourdiff." hour".($hourdiff > 1 ? "s " : " ");
        } elseif ($minutediff > 0) {
            $datestr .= $minutediff." minute".($minutediff > 1 ? "s " : " ");
        } elseif ($seconddiff > 0) {
            $datestr .= $seconddiff." second".($seconddiff > 1 ? "s " : " ");
        }

        if ($datestr == "") {
            return "Just now";
        }
        return $datestr."ago";

    }
}

class Post {
    public $title;
    public $content;
    public $accountId;
    public $date;
    public $id;
    public $authorFullname;
    public $comments;

    private function getComments() {
        global $db;
        $sql = "SELECT * FROM comments WHERE blogId = '".$this->id."' ORDER BY date DESC";
        $result = $db->query($sql);
        $comments = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $comment = new Comment($row['comment'], $row['accountId'], $row['date'], $row['commentId']);
                array_push($comments, $comment);
            }
        }
        return $comments;
    }

    public function get_date_str() {
        return date('dS F Y | H:i', $this->date);
    }

    public function __construct($title, $content, $author, $date, $id) {
        $this->title = $title;
        $this->content = $content;
        $this->accountId = $author;
        $this->date = $date;
        $this->id = $id;

        global $db;

        // Get author of post name
        $sql = "SELECT fname, lname FROM accounts WHERE accountId = '".$author."'";
        $result = $db->query($sql);
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $this->authorFullname = $row["fname"]." ".$row["lname"];
        } else {
            $this->authorFullname = "Unknown author";
        }

        // Get posts comments
        $this->comments = $this->getComments();
    }
}

function updatePosts() {
    global $db;
    global $posts;
    $sql = "SELECT * FROM blog";
    $result = $db->query($sql);
    

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $date = strtotime($row['date']);
            $post = new Post($row['title'], $row['content'], $row['accountId'], $date, $row['blogId']);
            array_push($posts, $post);
        }
    }

    return $posts;
}

function orderByDateDesc($objectArray) {
    // Custom sorting function to sort objects by date in descending order
    usort($objectArray, function($a, $b) {
        return strcmp($b->date, $a->date);
    });

    // Return the sorted array
    return $objectArray;
}

function addPost($title, $content, $author) {
    global $db;
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO blog (title, content, accountId, date) VALUES ('$title', '$content', '$author', '$date')";
    if ($db->query($sql) == true) {
        return true;
    } else {
        return false;
    }
}

function getPost($id) {
    global $db;
    $sql = "SELECT * FROM blog WHERE blogId = '".$id."'";
    $result = $db->query($sql);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $dateFromSQL = strtotime($row['date']);
        $date = date('dS F Y | H:i', $dateFromSQL);
        $post = new Post($row['title'], $row['content'], $row['accountId'], $date, $row['blogId']);
        return $post;
    } else {
        return null;
    }
}

function addComment($id, $content, $author) {
    global $db;
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO comments (comment, blogId, accountId, date) VALUES ('$content', '$id', '$author', '$date')";
    if ($db->query($sql) == true) {
        echo "Comment added";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }
}

function deleteComment($id) {
    global $db;
    if ($_SESSION["loggedIn"] == true) {
        if ($_SESSION["account"]->isAdmin()) {
            $sql = "DELETE FROM comments WHERE commentId = '".$id."'";
            if ($db->query($sql) == true) {
                return true;
            } else {
                return false;
            }
        } else {
            $accountId = $_SESSION["account"]->id;
            $sql = "SELECT commentId FROM comments WHERE commentId = '".$id."' AND accountId = '".$accountId."'";
            $result = $db->query($sql);
            if ($result->num_rows === 1) {
                $sql = "DELETE FROM comments WHERE commentId = '".$id."' AND accountId = '".$accountId."'";
                if ($db->query($sql) == true) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    } else {
        return false;
    }
}

function deletePost($id) {
    global $db;
    if ($_SESSION["loggedIn"] == true) {
        if ($_SESSION["account"]->isAdmin()) {
            $sql = "DELETE FROM blog WHERE blogId = '".$id."'";
            if ($db->query($sql) == true) {
                $sql = "DELETE FROM comments WHERE blogId = '".$id."'";
                if ($db->query($sql) == true) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            $accountId = $_SESSION["account"]->id;
            $sql = "SELECT blogId FROM blog WHERE blogId = '".$id."' AND accountId = '".$accountId."'";
            $result = $db->query($sql);
            if ($result->num_rows === 1) {
                $sql = "DELETE FROM blog WHERE blogId = '".$id."' AND accountId = '".$accountId."'";
                if ($db->query($sql) == true) {
                    $sql = "DELETE FROM comments WHERE blogId = '".$id."'";
                    if ($db->query($sql) == true) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    } else {
        return false;
    }
}

?>