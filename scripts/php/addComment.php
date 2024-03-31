<?php
include ("database.php");
$postId = $_GET['id'];
$comment = $_GET['comment'];
if ($_SESSION["loggedIn"] == true) {
    $accountId = $_SESSION["account"]->id;
    addComment($postId, nl2br($comment), $accountId);
    header("Location: ../../viewBlog.php?id=$postId");
    exit();
} else {
    header("Location: ../../login.php?error=Required to login first");
    exit();
}
?>