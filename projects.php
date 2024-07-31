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
                <section id="project-1">
                    <div class="item-inner-container">
                        <h2>Student Report Generator</h2>
                        <time class="other-information" datetime="2021">
                            Sep 2022 - Apr 2023
                        </time>
                        <div class="box-list" id="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Delphi</li>
                                <li>SQL</li>
                            </ul>
                        </div>
                        <div class="main-information">
                            <p>
                                This is a report system to be used for schools. Allows for easy storage(navigation) of student grades and data of each subject. It autogenerates the teacher comment on student. It's a complete school project, written in Pascal (Delphi IDE). There is a report showing each part of creating this, and why it was created. Feel free to read below (or download PDF Version, Much easier to read and navigate):
                            <br>
                                <a href="https://docdro.id/U86VbGU">Download PDF Report</a>
                            </p>
                        </div>
                        <aside>
                            <h3>Further Information</h3>
                            <p>
                                A project created according to the requirements of a client. Associated with Graveney School.
                            </p>
                        </aside>
                        <div class="media">
                            <a href="https://github.com/RayaanUddin/Student-Report-System"><i class="fa fa-github" aria-hidden="true"></i>Available on GitHub</a>
                        </div>
                    </div>
                </section>
                <section id="project-2">
                    <div class="item-inner-container">
                        <h2>Messaging App</h2>
                        <p class="other-information">
                            Jan 2024 - Jan 2024
                        </p>
                        <div class="box-list" id="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Java</li>
                            </ul>
                        </div>
                        <div class="main-information">
                            <p>
                                A fully functional open world messaging app created in Java using a server to communicate between clients. 
                                Allow to message to all or private message to individuals.
                                You can find both the client and server side of the app on GitHub, in seperate repos (not branches).
                            </p>
                        </div>
                        <div class="media">
                            <a href="https://github.com/RayaanUddin/Chat_System-Server_Side"><i class="fa fa-github" aria-hidden="true"></i>Available on GitHub</a>
                        </div>
                    </div>
                </section>
                <section id="project-3">
                    <div class="item-inner-container">
                        <h2>My Portfolio</h2>
                        <p class="other-information">
                            Mar 2024 - Apr 2024
                        </p>
                        <div class="box-list" id="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Php</li>
                                <li>JavaScript</li>
                            </ul>
                        </div>
                        <div class="main-information">
                            <p>
                                This is my portfolio.
                                <a href="https://www.rayaanuddin.co.uk">Live Preview!!!</a>
                            </p>
                            <p>
                                I am using HTML, CSS, Php, and JavaScript to create this website.
                            </p>
                            <p>
                                It will use a database to store blogs posted by users with accounts, with which they can
                                login using.
                            </p>
                        </div>
                        <div class="media">
                            <a href="https://github.com/RayaanUddin/MyPortfolio"><i class="fa fa-github" aria-hidden="true"></i>Available on GitHub</a>
                        </div>
                    </div>
                </section>
                <section id="project-4">
                    <div class="item-inner-container">
                        <h2>Ecommerce Website</h2>
                        <p class="other-information">
                            Jul 2024 - Aug 2024
                        </p>
                        <div class="box-list" id="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Php</li>
                                <li>JavaScript</li>
                            </ul>
                        </div>
                        <div class="main-information">
                            <p>
                                A selling website using Stripe API to add products and handle payments/ orders.
                                <a href="https://selling-website.rayaanuddin.co.uk">Live Preview!!!</a>
                            </p>
                        </div>
                        <div class="media">
                            <a href="https://github.com/RayaanUddin/selling-website"><i class="fa fa-github" aria-hidden="true"></i>Available on GitHub</a>
                        </div>
                    </div>
                </section>
            </section>
        </article>
        <?php
            include 'scripts/php/footer.php';
        ?>
    </div>
</body>
</html>