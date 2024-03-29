<?php
$pages = array(
    array("index.php", "fa fa-fw fa-home", "Home"),
    array("skills.php", "fa fa-search","Skills"),
    array("education.php", "fa fa-graduation-cap","Education"),
    array("projects.php", "fa fa-laptop","Projects"),
    array("viewBlog.php", "fa fa-pencil-square-o","Blog"),
);
function header_page($page, $title) {
    global $pages;
    echo "<header>";
    echo "<nav>";
    echo "<div id='nav-overlay'>";
    echo "<img src='images/logo.png' alt='Logo' />";
    echo "<button id='nav-show-button'><i class='fa fa-bars' aria-hidden='true'></i>Menu</button>";
    echo "<ul id='nav-pages-list' class='show hide'>";
    for ($i = 0; $i < count($pages); $i++) {
        if ($pages[$i][0] == $page) {
            echo "<li id='selectedpage'><a href='".$pages[$i][0]."'><i class='".$pages[$i][1]."'></i>".$pages[$i][2]."</a></li>";
        } else {
            echo "<li><a href='".$pages[$i][0]."'><i class='".$pages[$i][1]."'></i>".$pages[$i][2]."</a></li>";
        }
    }
    echo "</ul>";
    echo "<div id='login_signout_button'><a href='login.php'></i>Login</a></div>";
    echo "</div>";
    echo "</nav>";
    echo "<h1>$title</h1>";
    echo "</header>";
}
?>
