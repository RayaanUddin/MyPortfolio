<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayaan Uddin | Login</title>

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
        <?php
            include 'header.php';
        ?>
        <form action="login_verification.php" method="post">
            <h1>Login</h1>
            <div class="wrap-input">
                <input type="email" name="email" placeholder="" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="wrap-input">
                <input type="password" name="password" id="password" placeholder="" required/>
                <label for="password">Password</label>
            </div>
            <?php if (isset($_GET['error'])) {
                echo "<div class='error'><p>".$_GET['error']."</p></div>";
            } 
            ?>
            <input type="submit" value="Submit">
            <aside>
                <h2>Want an account?</h2>
                <p>
                    Accounts allow you to post to the blog. They are only granted to moderators.
                    If you would like to be a moderator, <a href="mailto:rayaan.uddin@outlook.com">Contact me via mail</a>.
                </p>
            </aside>
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