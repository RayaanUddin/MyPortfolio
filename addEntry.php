<?php
    session_start();
    if (!isset($_SESSION['loggedIn'])) {
        header("Location: login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayaan Uddin | Blog</title>

    <!-- Loading favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    
    <!-- Loading stylesheets -->
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 768px)" type="text/css"/>

    <!-- Loading libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <!-- Loading scripts -->
    <script src="javascript/script.js" type="text/javascript" defer></script>
    <script src="javascript/form.js" type="text/javascript" defer></script>
</head>
<body>
    <div class="form-container">
        <header>
            <nav>
                <div id="nav-overlay">
                    <img src="images/logo.png" alt="Logo" />
                    <button id="nav-show-button"><i class="fa fa-bars" aria-hidden="true"></i><div>Menu</div></button>
                    <ul id="nav-pages-list" class="show hide">
                        <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                        <li><a href="skills.html"><i class="fa fa-search"></i>Skills</a></li>
                        <li><a href="education.html"><i class="fa fa-graduation-cap"></i>Education</a></li>
                        <li><a href="projects.html"><i class="fa fa-laptop"></i>Projects</a></li>
                        <li><a href="viewBlog.php"><i class="fa fa-pencil-square-o"></i>Blog</a></li>
                    </ul>
                    <div id="login_signout_button"><a href="login.php"></i>Login</a></div>
                </div>
            </nav>
        </header>
        <form action="https://drusmannaeem.co.uk/process.php" method="get">
            <h1>Add Blog</h1>
            <div class="wrap-input">
                <input type="text" name="title" id="title" placeholder="" required>
                <label for="title">Title</label>
            </div>
            <textarea name="content" placeholder="Enter your text here" rows="5" required></textarea>
            <input type="submit" value="Post">
            <input type="reset" value="Clear">

        </form>
        <footer>
            <section id="socials">
                <a href="https://www.linkedin.com/in/rayaan-uddin/"><img alt="RayaanUddin | LinkedIn" src="images/socials/linkedin.svg" /></a>
                <a href="https://www.instagram.com/rayaanuddin6/"><img alt="RayaanUddin | Instagram" src="images/socials/instagram.svg" /></a>
                <a href="mailto:rayaan.uddin@outlook.com"><img alt="RayaanUddin | Email" src="images/socials/mail.svg" /></a>
            </section>
            <section>
                Copyright © 2024 Rayaan Uddin. All rights reserved.
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Manual login</a></li>
                    <li><a href="mailto:rayaan.uddin@outlook.com">Contact me via mail</a></li>
                </ul>
            </section>
        </footer>
    </div>
</body>
</html>