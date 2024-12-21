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
        <section id="skill-list">
            <ul>
                <?php
                    $skills = getAllSkills();
                    foreach ($skills as $skill) {
                        echo "<li><p>".$skill."</p></li>";
                    }
                ?>
            </ul>
        </section>
        <?php
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>