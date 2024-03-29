<?php
session_start();
$pages = array(
    array("index.php", "fa fa-fw fa-home", "Home"),
    array("skills.php", "fa fa-search", "Skills", "Skills List"),
    array("education.php", "fa fa-graduation-cap", "Education", "Education &#38; Qualifications"),
    array("projects.php", "fa fa-laptop", "Projects", "My &#34;Personal&#34; Projects"),
    array("viewBlog.php", "fa fa-pencil-square-o", "Blog", "Blog"),
);
$current_page = basename($_SERVER['PHP_SELF']);
echo "<header>";
echo "<nav>";
echo "<div id='nav-overlay'>";
echo "<img src='images/logo.png' alt='Logo' />";
echo "<button id='nav-show-button'><i class='fa fa-bars' aria-hidden='true'></i>Menu</button>";
echo "<ul id='nav-pages-list' class='show hide'>";
for ($i = 0; $i < count($pages); $i++) {
    if ($pages[$i][0] == $current_page) {
        echo "<li id='selectedpage'><a href='".$pages[$i][0]."'><i class='".$pages[$i][1]."'></i>".$pages[$i][2]."</a></li>";
        $current_page_index = $i;
    } else {
        echo "<li><a href='".$pages[$i][0]."'><i class='".$pages[$i][1]."'></i>".$pages[$i][2]."</a></li>";
    }
}
echo "</ul>";
if ($_SESSION["loggedIn"] == true) {
    echo "<div id='login_signout_button'><a href='logout.php'></i>Sign Out</a></div>";
} else {
    echo "<div id='login_signout_button'><a href='login.php'></i>Login</a></div>";
}
echo "</div>";
echo "</nav>";
if (isset($current_page_index) && isset($pages[$current_page_index][3])) {
    echo "<h1>".$pages[$current_page_index][3]."</h1>";
}
echo "</header>";
?>
