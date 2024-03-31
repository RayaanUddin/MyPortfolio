<?php
    include 'scripts/php/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'scripts/php/head.php'; ?>
<body>
    <div class="form-container">
        <?php
            include 'scripts/php/header.php';
        ?>
        <form action="scripts/php/login_verification.php" method="post">
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
            <input type="submit" value="Sign in">
            <aside>
                <h2>Want an account?</h2>
                <p>
                    Accounts allow you to comment on blog posts, <a href="signup.php">sign up here.</a>
                    <br>If you would like to reset your password, <a href="mailto:rayaan.uddin@outlook.com">Contact me via mail</a>.
                </p>
            </aside>
        </form>
        <?php
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>