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
                $blog = getBlog($_GET['id']);
                if ($blog != null) {
                    echo "<article id='blog_full'>";
                    echo "<nav id='blog-nav'>";
                    echo "<a href='viewBlog.php#".$_GET['id']."'><i class='fa fa-arrow-left'></i><p>Back</p></a>";
                    echo "</nav>";
                    echo "<time datetime='".$blog->date."'>".$blog->getLongDate_toString()."</time>";
                    echo "<h3>".$blog->title."</h3>";
                    echo "<p class='content'>".$blog->content."</p>";
                    echo "<p class='author'>Author: ".$blog->author->getFullname()."</p>";
                    echo "<div id='comments'>";
                    echo "<form action='scripts/php/addComment.php' method='get'>";
                    echo "<textarea name='comment' placeholder='Enter comment here'></textarea>";
                    echo "<input type='hidden' name='id' value='".$blog->id."' required>";
                    echo "<input type='submit' value='Send'>";
                    echo "</form>";
                    echo "<ul id='comments_list'>";
                    for ($i = 0; $i < count($blog->comments); $i++) {
                        echo "<li class='comment'>";
                        echo "<p class='comment_author'>".$blog->comments[$i]->author->getFullname()."</p>";
                        echo "<p class='comment_content'>".$blog->comments[$i]->comment."</p>";
                        echo "<time datetime='".$blog->comments[$i]->date."'>".$blog->comments[$i]->timeAgo_toString()."</time>";
                        if (isset($_SESSION['user']) && ($blog->comments[$i]->author->id == $_SESSION['user']->id || $_SESSION['user']->isAdmin())) {
                            echo '<a class="post_comment_delete" href="scripts/php/deleteBlog.php?commentId='.$blog->comments[$i]->id.'&blogId='.$_GET['id'].'"><i class="fa fa-trash"></i></a>';
                        }
                        echo "</li>";
                    }
                    echo "</ul>";
                    echo "</div>";
                    echo "</article>";
                }
                else {
                    echo "<p>Blog not found</p>";
                }
            }
            else {
                $blogs = orderByDateDesc(getAllBlogs());
                if (isset($_GET['title']) && isset($_GET['content'])) { // Preview Blog
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
                        <p class="author">Author: <?php echo $_SESSION['user']->getFullname(); ?></p>
                    </article>
                <?php } else {
                            if (isset($_SESSION['user']) && $_SESSION['user']->isAdmin()){?>
                                <a id='addpost_button' href='addEntry.php'>Add Post</a>
                            <?php } ?>
                            <section id='blog'>
                <?php }

                for ($i = 0; $i < count($blogs); $i++) {
                    echo "<article id=".$blogs[$i]->id." >";
                    echo "<time datetime='".$blogs[$i]->date."'>".$blogs[$i]->getLongDate_toString()."</time>";
                    echo "<h3>".$blogs[$i]->title."</h3>";
                    echo "<p class='content'>".$blogs[$i]->content."</p>";
                    if (isset($_SESSION['user']) && ($_SESSION['user']->isAdmin())) {
                        echo '<a class="post_comment_delete" href="scripts/php/deleteBlog.php?blogId='.$blogs[$i]->id.'"><i class="fa fa-trash"></i></a>';
                    }
                    echo "<p class='author'>Author: ".$blogs[$i]->author->getFullName()."</p>";
                    echo "<a class='comments_button' href='viewBlog.php?id=".$blogs[$i]->id."'><i class='fa fa-comments-o'></i><p>".count($blogs[$i]->comments)."</p></a>";
                    echo "</article>";
                }
                if (count($blogs) === 0) { ?>
                    <article id="no_posts">
                        <p class="content">No posts found</p>
                    </article>
                <?php }
                echo "</section>";
            }
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>