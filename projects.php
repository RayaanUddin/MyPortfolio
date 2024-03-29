<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayaan Uddin | Projects</title>

    <!-- Loading favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    
    <!-- Loading stylesheets -->
    <link rel="stylesheet" href="css/reset.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 768px)" type="text/css"/>

    <!-- Loading libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <!-- Loading scripts -->
    <script src="javascript/script.js" type="text/javascript" defer></script>
</head>
<body>
    <div class="container">
        <?php
            include 'header.php';
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
                            2021 - 2023
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
                        <h2>Founder of Ns Scripts</h2>
                        <time class="other-information" datetime="2021">
                            2021 - Present
                        </time>
                        <div class="box-list" id="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Lua</li>
                                <li>Web Development</li>
                                <li>Customer Service</li>
                            </ul>
                        </div>
                        <div class="main-information">
                            <p>
                                Ns Scripts is a small company that I founded.
                                A small game (FiveM) development company, which develops Lua programs for servers, and provide customer service support.
                                Learnt how to use Lua for game projects in real life along with how to set up and manage employees within a company which also provides customer service.
                            </p>
                        </div>
                    </div>
                </section>
                <section id="project-3">
                    <div class="item-inner-container">
                        <h2>Messaging App</h2>
                        <p class="other-information">
                            2024 - Present
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
                <section id="project-4">
                    <div class="item-inner-container">
                        <h2>My Portfolio</h2>
                        <p class="other-information">
                            Ongoing
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
                                This is my portfolio. It is a work in progress. I am currently working on it.
                            </p>
                            <p>
                                I am using HTML, CSS, Php, and JavaScript to create this website.
                            </p>
                            <p>
                                It will use a database to store blogs posted by users with accounts, with which they can
                                login using.
                            </p>
                        </div>
                    </div>
                </section>     
            </section>
        </article>
        <footer>
            <section id="socials">
                <a href="https://www.linkedin.com/in/rayaan-uddin/"><img alt="RayaanUddin | LinkedIn" src="images/socials/linkedin.svg" /></a>
                <a href="https://www.instagram.com/rayaanuddin6/"><img alt="RayaanUddin | Instagram" src="images/socials/instagram.svg" /></a>
                <a href="mailto:rayaan.uddin@outlook.com"><img alt="RayaanUddin | Email" src="images/socials/mail.svg" /></a>
            </section>
            <section>
                Copyright © 2024 Rayaan Uddin. All rights reserved.
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Manual login</a></li>
                    <li><a href="mailto:rayaan.uddin@outlook.com">Contact me via mail</a></li>
                </ul>
            </section>
        </footer>
    </div>
</body>
</html>