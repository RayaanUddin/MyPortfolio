<?php
include ("database.php");
if (isset($_SESSION["user"])) {
    $id = $_SESSION["user"]->id;
    if (isset($_GET['title']) && $_GET['title']!="" && isset($_GET['content']) && $_GET['content']!="" && addBlog($_GET['title'], nl2br($_GET['content']), $id)) {
        header("Location: ../../viewBlog.php");
        exit();
    } else {
        header("Location: ../../addEntry.php?error=Failed to add post&title=".$_GET['title']."&content=".$_GET['content']);
        exit();
    }
} else {
    header("Location: ../../login.php?error=Required to login first");
    exit();
}
?>