<?php include("database.php");
if (isset($_SESSION["user"])) {
    $blogId = $_GET['blogId'];
    $accountId = $_SESSION["user"]->id;
    if (isset($_GET['commentId'])) {
        if (deleteComment($_GET['commentId'])) {
            $commentId = $_GET['commentId'];
            header("Location: ../../viewBlog.php?id=$blogId");
        } else {
            header("Location: ../../viewBlog.php?id=$blogId&error=You are not the author of this comment or an admin");
        }
    } elseif (isset($blogId)) {
        if (deleteBlog($blogId)) {
            header("Location: ../../viewBlog.php");
        } else {
            header("Location: ../../viewBlog.php?error=You are not the an admin");
        }
    }
    exit();
} else {
    header("Location: ../../login.php?error=Required to login first");
    exit();
}
?>