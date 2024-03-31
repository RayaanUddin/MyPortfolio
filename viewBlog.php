<?php
    include 'scripts/php/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<?php include 'scripts/php/head.php'; ?>
<body>
    <div class="container">
        <?php
            include 'scripts/php/header.php';
            ?>
            <section id="blog-error">
                <?php
                    if (isset($_GET['error'])) {
                        echo "<p>Error: ".$_GET['error']."</p>";
                    }
                ?>
            </section>
        <?php
            if (isset($_GET['id'])) {
                $post = getPost($_GET['id']);
                if ($post != null) {
                    echo "<article id='blog_full'>";
                    echo "<nav id='blog-nav'>";
                    echo "<a href='viewBlog.php#".$_GET['id']."'><i class='fa fa-arrow-left'></i><p>Back</p></a>";
                    echo "</nav>";
                    echo "<time datetime='".$post->date."'>".$post->date."</time>";
                    echo "<h3>".$post->title."</h3>";
                    echo "<p class='content'>".$post->content."</p>";
                    echo "<p class='author'>Author: ".$post->authorFullname."</p>";
                    echo "<div id='comments'>";
                    echo "<form action='scripts/php/addComment.php' method='get'>";
                    echo "<textarea name='comment' placeholder='Enter comment here' required></textarea>";
                    echo "<input type='hidden' name='id' value='".$post->id."' required>";
                    echo "<input type='submit' value='Send'>";
                    echo "</form>";
                    echo "<ul id='comments_list'>";
                    for ($i = 0; $i < count($post->comments); $i++) {
                        echo "<li class='comment'>";
                        echo "<p class='comment_author'>".$post->comments[$i]->authorFullname."</p>";
                        echo "<p class='comment_content'>".$post->comments[$i]->comment."</p>";
                        echo "<time datetime='".$post->comments[$i]->get_date_str()."'>".$post->comments[$i]->get_date_str()."</time>";
                        if ($post->comments[$i]->accountId == $_SESSION['account']->id || $_SESSION['account']->isAdmin()) {
                            echo '<a class="post_comment_delete" href="scripts/php/deleteBlog.php?commentId='.$post->comments[$i]->id.'&postId='.$_GET['id'].'"><i class="fa fa-trash"></i></a>';
                        }
                        echo "</li>";
                    }
                    echo "</ul>";
                    echo "</div>";
                    echo "</article>";
                }
                else {
                    echo "<p>Post not found</p>";
                }
            }
            else {
                $posts = orderByDateDesc(updatePosts());
                if (isset($_GET['title']) && isset($_GET['content']) && isset($_SESSION['account']) && $_SESSION['account']->isAdmin()) {
                    ?>
                    <nav id="blog-nav">
                        <a href="addEntry.php?title=<?php echo $_GET['title']; ?>&content=<?php echo $_GET['content']; ?>"><i class='fa fa-arrow-left'></i><p>Back</p></a>
                        <p>Preview</p>
                        <a href="scripts/php/addPost.php?title=<?php echo $_GET['title']; ?>&content=<?php echo $_GET['content']; ?>"><p>Post</p><i class='fa fa-check'></i></a>
                    </nav>
                    <a id='addpost_button' href='addEntry.php'>Add Post</a>
                    <section id='blog'>
                    <article id="preview">
                        <time>Preview</time>
                        <h3><?php echo $_GET['title']; ?></h3>
                        <p class="content"><?php echo $_GET['content']; ?></p>
                        <p class="author">Author: <?php echo $_SESSION['account']->getFullname(); ?></p>
                    </article>
                <?php } else { ?>
                    <a id='addpost_button' href='addEntry.php'>Add Post</a>
                    <section id='blog'>
                <?php }

                for ($i = 0; $i < count($posts); $i++) {
                    echo "<article id=".$posts[$i]->id." >";
                    echo "<time datetime='".$posts[$i]->date."'>".$posts[$i]->get_date_str()."</time>";
                    echo "<h3>".$posts[$i]->title."</h3>";
                    echo "<p class='content'>".$posts[$i]->content."</p>";
                    if ($posts[$i]->accountId == $_SESSION['account']->id || $_SESSION['account']->isAdmin()) {
                        echo '<a class="post_comment_delete" href="scripts/php/deleteBlog.php?postId='.$posts[$i]->id.'"><i class="fa fa-trash"></i></a>';
                    }
                    echo "<p class='author'>Author: ".$posts[$i]->authorFullname."</p>";
                    echo "<a class='comments_button' href='viewBlog.php?id=".$posts[$i]->id."'><i class='fa fa-comments-o'></i><p>".count($posts[$i]->comments)."</p></a>";
                    echo "</article>";
                }
                echo "</section>";
            }
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>