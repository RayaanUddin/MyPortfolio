<?php
include ("database.php");
$blogId = $_GET['id'];
$comment = $_GET['comment'];
if (isset($_SESSION["user"])) {
    $accountId = $_SESSION["user"]->id;
    addComment($blogId, nl2br($comment), $accountId);
    header("Location: ../../viewBlog.php?id=$blogId");
    exit();
} else {
    header("Location: ../../login.php?error=Required to login first");
    exit();
}
?>