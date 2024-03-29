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
            <?php
                include 'database.php';
                $posts = updatePosts();
                for ($i = 0; $i < count($posts); $i++) {
                    echo "<article>";
                    echo "<time datetime='".$posts[$i]->date."'>".$posts[$i]->date."</time>";
                    echo "<h3>".$posts[$i]->title."</h3>";
                    echo "<p>".$posts[$i]->content."</p>";
                    echo "<p id='author'>Author: ".$posts[$i]->authorFullname."</p>";
                    echo "</article>";
                }
            ?>
        </section>
        <?php
            include 'footer.php';
        ?>
    </div>
</body>
</html>