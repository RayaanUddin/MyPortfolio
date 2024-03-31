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
        <form action="scripts/php/createaccount.php" method="post" id="create-account-form">
            <h1>Signup</h1>
            <div class="wrap-input">
                <input type="text" id="fname" name="fname" pattern="[A-Za-z]{3,50}" title="Name must contain alphabet letters. Length must be between 3 and 50." required placeholder>
                <label for="emfnameail">First Name</label>
            </div>
            <div class="wrap-input">
            <input type="text" id="lname" name="lname" pattern="[A-Za-z]{3,50}" title="Name must contain alphabet letters. Length must be between 3 and 50." required placeholder>
                <label for="lname">Last Name</label>
            </div>
            <div class="wrap-input">
                <input type="email" name="email" placeholder="" id="email" required>
                <label for="email">Email</label>
            </div>
            <div class="wrap-input">
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least a number, a uppercase, and at least 8 or more characters" placeholder required>
                <label for="password">Password</label>
            </div>
            <div class="wrap-input">
            <input type="password" id="reenter-password" name="reenter-password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least a number, a uppercase, and at least 8 or more characters" placeholder required>
                <label for="reenter-password">Repeat Password</label>
            </div>
            <?php if (isset($_GET['error'])) {
                echo "<div class='error'><p>".$_GET['error']."</p></div>";
            } 
            ?>
            <input type="submit" value="Create Account">
        </form>
        <?php
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>