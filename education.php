<?php include "scripts/php/database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'scripts/php/head.php'; ?>
<body>
    <div class="container">
        <?php
            include 'scripts/php/header.php';
        ?>
        <article id="education">
            <p>
                From a young age, my interests have revolved around software development and mathematics. 
                My ultimate goal is to pursue a career in software engineering, 
                actively contributing to and witnessing the advancements in future technology.
            </p>
            <br>
            <section class="content-list">
                <?php
                    $education = getAllEducation();
                    foreach ($education as $edu) {
                        echo "<section style=\"background-image: url('".$edu->backgroundImage."');\">";
                        echo "<div class='item-inner-container'>";
                        echo "<h2>".$edu->title."</h2>";
                        echo "<time class='other-information' datetime='2021'>";
                        echo $edu->startDate." - ".$edu->endDate;
                        echo "</time>";
                        $skills = $edu->getSkills();
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
                        echo $edu->description;
                        echo "</p>";
                        echo "</div>";
                        $grades = $edu->getGrades();
                        if (count($grades) > 0) {
                            echo "<table>";
                            echo "<tr>";
                            echo "<th>Subject</th>";
                            echo "<th>Grade</th>";
                            echo "</tr>";
                            foreach ($grades as $subject => $grade) {
                                echo "<tr>";
                                echo "<td>".$subject."</td>";
                                echo "<td>".$grade."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
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