<?php
    include "database.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = login($email, $password);
    if ($user) {
        $_SESSION['user'] = $user;
        if ($user->isAdmin()) {
            header('Location: ../../addEntry.php');
        } else {
            header('Location: ../../viewBlog.php');
        }
        exit();
    } else {
        header('Location: ../../login.php?error=Invalid email or password');
        exit();
    }
?>