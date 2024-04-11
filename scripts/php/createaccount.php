<?php
include("database.php");
session_unset();

$email = $_POST['email'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];

if (register($fname, $lname, $email, $password, 0)) {
    header('Location: ../../login.php?error=Account created successfully');
    exit();
} else {
    //header('Location: ../../login.php?error=Account already exists');
    //exit();
}
?>