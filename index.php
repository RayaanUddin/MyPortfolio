<?php
    include "scripts/php/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'scripts/php/head.php'; ?>
<body>
    <div class="container">
        <?php
            include 'scripts/php/header.php';
        ?>
        <article id="myself">
            <figure>
                <figcaption>
                    <h1>Rayaan Uddin</h1>
                    <p>Computer Science Student</p>
                </figcaption>
                <img src="images/me.png" alt="Rayaan Uddin" />
            </figure>
            <div id="aboutme">
                <h2>About Me</h2>
                <div>
                    <p>
                        I am a first-year BSc student in computer science at Queen Mary University of London, where I am immersing myself in the world of programming and technology. I have hands-on experience in Java, C#, Pascal, HTML, CSS, JavaScript, and PHP, which have sharpened my coding skills and fueled my passion for creating innovative solutions.
                    </p>
                    <p>
                        As a founder of a small game development group, I create Lua programs for servers and provide customer service support. I started this venture in May 2023.
                    </p>
                    <p>
                        My goal is to pursue a career in software development/engineering, where I can contribute to building impactful and cutting-edge applications. I am excited about the endless possibilities that technology presents and eager to dive deep into the realms of coding and development.
                    </p>
                    <p>
                        I am looking for opportunities to gain practical experience in software development, such as internships, projects, or collaborations. I am ready to apply my skills and learn from real-world challenges. I am open to connecting with professionals, mentors, and peers who share a passion for technology and software development. If you have insights to share, opportunities to explore, or just want to connect, feel free to reach out.
                    </p>
                </div>
            </div>
        </article>
        <?php
            $certifications = getAllCertifications();
            $experiences = getAllExperiences();
            if (count($experiences) > 0) {
        ?>
        <section class="row-list">
            <h2>Experience</h2>
            <ul>
                <?php
                    foreach ($experiences as $experience) {
                        echo "<li>";
                        echo "<h3>".$experience->company." | ".$experience->job."</h3>";
                        echo "<time>".$experience->startDate." - ".$experience->endDate."</time>";
                        echo "<p>".$experience->description."</p>";
                        echo "</li>";
                    }
                ?>
            </ul>
        </section>
        <?php
            }
            if (count($certifications) > 0) {
        ?>
        <section class="row-list">
            <h2>Licenses & Certifications</h2>
            <ul>
                <?php
                    foreach ($certifications as $certification) {
                        echo "<li>";
                        echo "<h3>";
                        if ($certification->link != null) {
                            echo "<a href='".$certification->link."'>";
                            echo $certification->title." | ".$certification->issuedBy;
                            echo "</a>";
                        } else {
                            echo $certification->title." | ".$certification->issuedBy;
                        }
                        echo "</h3>";
                        echo "<time>Issued: ".$certification->date."</time>";
                        echo "<p>".$certification->description."</p>";
                        echo "</li>";
                    }
                ?>
            </ul>
        </section>
        <?php
            }
        ?>
        <?php
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>