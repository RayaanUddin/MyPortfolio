<?php
include ("database.php");
session_start();
if ($_SESSION["loggedIn"] == true) {
    $id = $_SESSION["account"]->id;
    echo "ID:".$id;
    addPost($_GET['title'], $_GET['content'], $id);
} else {
    header("Location: login.php?error=Required to login first");
    exit();
}



?>