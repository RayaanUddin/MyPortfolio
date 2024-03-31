<?php include ("pageList.php"); ?>
<header>
    <nav>
        <div id='nav-overlay'>
            <img src='images/logo.png' alt='Logo' />
            <button id='nav-show-button'><i class='fa fa-bars' aria-hidden='true'></i>Menu</button>
            <ul id='nav-pages-list' class='show hide'>
            <?php
            foreach ($pages as $i => $page) {
                if ($page[0] == true) {
                    if ($current_page == $i) {
                        echo "<li id='selectedpage'><a href='".$i."'><i class='".$page[2]."'></i>".$page[1]."</a></li>";
                    } else {
                        echo "<li><a href='".$i."'><i class='".$page[2]."'></i>".$page[1]."</a></li>";
                    }
                    
                }
            } ?>
            </ul>
            <?php
            if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == true) {
                echo "<div id='login_signout_button'><a href='scripts/php/logout.php'></i>Sign Out</a></div>";
            } else {
                echo "<div id='login_signout_button'><a href='login.php'></i>Login</a></div>";
            } ?>
        </div>
    </nav>
    <?php
    if ($pages[$current_page][0] && isset($pages[$current_page][3])) {
        echo "<h1>".$pages[$current_page][3]."</h1>";
    } ?>
</header>

