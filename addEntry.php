<?php
    include "scripts/php/database.php";

    if (!isset($_SESSION['loggedIn'])) {
        header("Location: login.php?error=Required to login first");
        exit();
    } else {
        if (!$_SESSION['account']->isAdmin()) {
            header("Location: viewBlog.php?error=You are not allowed to post a blog. Must be an admin.");
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'scripts/php/head.php'; ?>
<body>
    <div class="form-container">
        <?php
            include 'scripts/php/header.php';
        ?>
        <form action="scripts/php/addPost.php" method="get">
            <h1>Add Blog</h1>
            <div class="wrap-input">
                <input type="text" name="title" id="title" placeholder="" required value=<?php echo (isset($_GET['title']) ? $_GET['title'] : "") ?>>
                <label for="title">Title</label>
            </div>
            <textarea name="content" id="content" placeholder="Enter your text here" rows="5" required><?php echo (isset($_GET['content']) ? $_GET['content'] : "") ?></textarea>
            <div id="blog-post-input-container">
                <input type="submit" value="Post"/>
                <input type="reset" value="Clear"/>
            </div>
            <button id="blog-post-preview">Preview</button>
        </form>
        <?php
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>