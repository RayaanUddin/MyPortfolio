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
        <article id="projects">
            <p>
                Here are some of the projects I have worked on. 
                Some are ongoing, and some are complete. 
                I have worked on these projects to improve my skills and to learn new ones.
            </p>
            <br>
            <section class="content-list">
                <?php
                    $projects = getAllProjects();
                    foreach ($projects as $project) {
                        echo "<section style=\"background-image: url('".$project->backgroundImage."');\">";
                        echo "<div class='item-inner-container'>";
                        echo "<h2>".$project->title."</h2>";
                        echo "<time class='other-information' datetime='2021'>";
                        echo $project->startDate." - ".$project->endDate;
                        echo "</time>";
                        $skills = $project->getSkills();
                        if (count($skills) > 0) {
                            echo "<div class='box-list' id='skills'>";
                            echo "<h3>Skills</h3>";
                            echo "<ul>";
                            foreach ($skills as $skill) {
                                echo "<li>".$skill."</li>";
                            }
                            echo "</ul>";
                            echo "</div>";
                        }
                        echo "<div class='main-information'>";
                        echo "<p>";
                        echo $project->description;
                        echo "</p>";
                        echo "</div>";
                        if (isset($project->furtherInformation)) {
                            echo "<aside>";
                            echo "<h3>Further Information</h3>";
                            echo "<p>";
                            echo $project->furtherInformation;
                            echo "</p>";
                            echo "</aside>";
                        }
                        if (isset($project->github)) {
                            echo "<div class='media'>";
                            echo "<a href='" . $project->github . "'><i class='fa fa-github' aria-hidden='true'></i>Available on GitHub</a>";
                            echo "</div>";
                        }
                        echo "</div>";
                        echo "</section>";
                    }
                ?>
            </section>
        </article>
        <?php
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>