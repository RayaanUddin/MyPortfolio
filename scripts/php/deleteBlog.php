<?php include("database.php");
if ($_SESSION["loggedIn"] == true) {
    $postId = $_GET['postId'];
    $accountId = $_SESSION["account"]->id;
    if (isset($_GET['commentId'])) {
        if (deleteComment($_GET['commentId'])) {
            $commentId = $_GET['commentId'];
            header("Location: ../../viewBlog.php?id=$postId");
        } else {
            header("Location: ../../viewBlog.php?id=$postId&error=You are not the author of this comment");
        }
    } elseif (isset($postId)) {
        if (deletePost($postId)) {
            header("Location: ../../viewBlog.php");
        } else {
            header("Location: ../../viewBlog.php?error=You are not the author of this post");
        }
    }
    exit();
} else {
    header("Location: ../../login.php?error=Required to login first");
    exit();
}
?>