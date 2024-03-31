<?php
include ("database.php");
if ($_SESSION["loggedIn"] == true) {
    $id = $_SESSION["account"]->id;
    if (addPost($_GET['title'], nl2br($_GET['content']), $id)) {
        header("Location: ../../viewBlog.php");
        exit();
    } else {
        header("Location: ../../addEntry.php?error=Failed to add post");
        exit();
    }
} else {
    header("Location: ../../login.php?error=Required to login first");
    exit();
}
?>