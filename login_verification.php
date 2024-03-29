<?php
    session_start();
    include "account.php";

    $account = new Account();

    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($account->login($email, $password) == true) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['fname'] = $account->fname;
        $_SESSION['lname'] = $account->lname;
        $_SESSION['loggedIn'] = true;
        header('Location: addEntry.php');
        exit();
    } else {
        header('Location: login.php?error=Invalid email or password');
        exit();
    }
?>