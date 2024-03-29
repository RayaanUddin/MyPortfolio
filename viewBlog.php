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
</head>
<body>
    <div class="container">
        <?php
            include 'header.php';
        ?>
        <a id="addpost_button" href="addEntry.php">Add Post</a>
        <section id="blog">
            <article>
                <time datetime="2024-01-01">1st January 2024</time>
                <h3>Blog Post 1 (TEST)</h3>
                <p>
                    I have been working on a new messaging app in Java. 
                    It is a simple app that allows users to send messages to each other. 
                    I have been working on this project for a few months now and I am happy to say that it is almost complete. 
                    I will be releasing it soon.
                </p>
            </article>
            <article>
                <time datetime="2024-01-02">2nd January 2024</time>
                <h3>Blog Post 2 (TEST)</h3>
                <p>
                    I have been working on a new messaging app in Java. 
                    It is a simple app that allows users to send messages to each other. 
                    I have been working on this project for a few months now and I am happy to say that it is almost complete. 
                    I will be releasing it soon.
                </p>
            </article>
        </section>
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