<?php
    include "database.php";


    $account = new Account();

    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($account->login($email, $password) == true) {
        $_SESSION['account'] = $account;
        $_SESSION['loggedIn'] = true;
        if ($account->isAdmin()) {
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