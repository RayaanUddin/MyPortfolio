<?php
session_start();
$db = new mysqli('localhost', 'RayaanUddin', 'Rayaan10', 'portfolio');

$permission_levels = array(
    0 => "User",
    1 => "Admin"
);

// Class represents website user
class User {
    public $id;
    public $fname;
    public $lname;
    public $email;
    private $permission;

    public function __construct($id) {
        $this->id = $id;

        global $db;
        $sql = "SELECT * FROM accounts WHERE accountId = '$id'";
        $result = $db->query($sql);

        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            $this->fname = $row["fname"];
            $this->lname = $row["lname"];
            $this->email = $row["email"];
            $this->permission = $row['permission'];
        }
    }

    public function getFullname() {
        return $this->fname." ".$this->lname;
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

// Login to account
function login($email, $password) {
    global $db;
    $sql = "SELECT * FROM accounts WHERE email = '".$email."' AND password = '".$password."'";
    $result = $db->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        return new User($row['accountId']);
    } else {
        return false;
    }
}

// Register a new account
function register($fname, $lname, $email, $password, $perm) {
    global $db;
    $sql = "SELECT * FROM accounts WHERE email = '$email'";
    $result = $db->query($sql);
    if ($result->num_rows === 0) { // If account does not exists...
        $sql = "INSERT INTO accounts (fname, lname, email, password, permission) VALUES ('$fname', '$lname', '$email', '$password', '$perm')";
        if ($db->query($sql)) { // Should always execute unless issue on database
            return true;
        } else { // Exists for texting purposes
            return false;
        }
    } else { // If account exists...
        return false;
    }
}

// Abstract class for Comment and Blog Postings.
abstract class Post {
    public $id;
    public $author;
    public $date;

    public function __construct($id, $accountId, $date) {
        $this->id = $id;
        $this->author = new User($accountId);
        $this->date = $date;
    }
    public function timeAgo_toString() {
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
    public function getLongDate_toString() {
        return date('dS F Y | H:i', $this->date);
    }
}

class Comment extends Post {
    public $comment;

    public function __construct($comment, $authorId, $date, $id) {
        $this->comment = $comment;
        parent::__construct($id, $authorId, $date);
    }
}

class Blog extends Post {
    public $title;
    public $content;
    public $comments;

    private function getComments() {
        global $db;
        $sql = "SELECT * FROM comments WHERE blogId = '".$this->id."'";
        $result = $db->query($sql);
        $comments = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $comment = new Comment($row['comment'], $row['accountId'], strtotime($row['date']), $row['commentId']);
                array_push($comments, $comment);
            }
        }
        return $comments;
    }

    public function __construct($title, $content, $authorId, $date, $id) {
        $this->title = $title;
        $this->content = $content;
        parent::__construct($id, $authorId, $date);

        // Get posts comments
        $this->comments = orderByDateDesc($this->getComments());
    }
}

// AI Generated sorting algorithm
// Start
function mergeSort(&$arr, $left, $right) {
    if ($left < $right) {
        $mid = (int)(($left + $right) / 2);

        mergeSort($arr, $left, $mid);
        mergeSort($arr, $mid + 1, $right);

        merge($arr, $left, $mid, $right);
    }
}

function merge(&$arr, $left, $mid, $right) {
    $n1 = $mid - $left + 1;
    $n2 = $right - $mid;

    $L = [];
    $R = [];

    for ($i = 0; $i < $n1; $i++)
        $L[$i] = $arr[$left + $i];

    for ($j = 0; $j < $n2; $j++)
        $R[$j] = $arr[$mid + 1 + $j];

    $i = 0;
    $j = 0;
    $k = $left;

    while ($i < $n1 && $j < $n2) {
        if ($L[$i]->date >= $R[$j]->date) {
            $arr[$k] = $L[$i];
            $i++;
        } else {
            $arr[$k] = $R[$j];
            $j++;
        }
        $k++;
    }

    while ($i < $n1) {
        $arr[$k] = $L[$i];
        $i++;
        $k++;
    }

    while ($j < $n2) {
        $arr[$k] = $R[$j];
        $j++;
        $k++;
    }
}

function orderByDateDesc($objects) {
    $length = count($objects);
    mergeSort($objects, 0, $length - 1);
    return $objects;
}

// End

// Gets all blogs from database
function getAllBlogs() {
    global $db;
    $blog_array = array();

    $sql = "SELECT * FROM blog";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $date = strtotime($row['date']);
            $blog = new Blog($row['title'], $row['content'], $row['accountId'], $date, $row['blogId']);
            array_push($blog_array, $blog);
        }
    }

    return $blog_array;
}

function addBlog($title, $content, $author) {
    global $db;
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO blog (title, content, accountId, date) VALUES ('$title', '$content', '$author', '$date')";
    if ($db->query($sql) == true) {
        return true;
    } else {
        return false;
    }
}

// Gets a blog by id
function getBlog($id) {
    global $db;
    $sql = "SELECT * FROM blog WHERE blogId = '".$id."'";
    $result = $db->query($sql);
    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $date = strtotime($row['date']);
        $blog = new Blog($row['title'], $row['content'], $row['accountId'], $date, $row['blogId']);
        return $blog;
    } else {
        return null;
    }
}

// Deletes a blog by id
function deleteBlog($id) {
    global $db;
    if (isset($_SESSION["user"])) {
        if ($_SESSION["user"]->isAdmin()) { // Only admins can delete blogs
            // Delete all comments first from blog post..
            $sql = "DELETE FROM comments WHERE blogId = '".$id."'";
            if ($db->query($sql) == true) {
                // Then delete the blog post..
                $sql = "DELETE FROM blog WHERE blogId = '".$id."'";
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
    } else {
        return false;
    }
}

// Add Comment to blog
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

// Delete comment by id
function deleteComment($id) {
    global $db;
    if (isset($_SESSION["user"])) {
        if ($_SESSION["user"]->isAdmin()) {
        } else {
            $accountId = $_SESSION["user"]->id;
            $sql = "SELECT commentId FROM comments WHERE commentId = '".$id."' AND accountId = '".$accountId."'";
            $result = $db->query($sql);
            if ($result->num_rows === 1) {
            } else {
                return false;
            }
        }
        $sql = "DELETE FROM comments WHERE commentId = '".$id."'";
        if ($db->query($sql) == true) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

?>