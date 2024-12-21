<?php
$pages = array(
    "index.php" => array(true, "Home", "fa fa-fw fa-home"),
    "skills.php" => array(true, "Skills", "fa fa-search", "Skills List"),
    "education.php" => array(true, "Education", "fa fa-graduation-cap", "Education &#38; Qualifications"),
    "projects.php" => array(true, "Projects", "fa fa-laptop", "My Projects"),
    "viewBlog.php" => array(true, "Blog", "fa fa-pencil-square-o", "Blog"),
    "login.php" => array(false, "Login"), // Not included in navigation
    "addEntry.php"=> array(false, "Add Post"), // Not included in navigation
    "signup.php" => array(false, "Sign Up") // Not included in navigation
);
$current_page = basename($_SERVER['PHP_SELF']);
?>