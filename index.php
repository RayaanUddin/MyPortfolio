<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rayaan Uddin | Home</title>

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
        <section class="row-list">
            <h2>Experience</h2>
            <ul>
                <li>
                    <h3>
                        School Uniform Direct | Sales Assistant
                    </h3>
                    <time>
                        Jun 2021 - Sep 2021
                    </time>
                    <p>
                        Working a part time job. 
                    </p>
                </li>
                <li>
                    <h3>
                        Graveney Trust | Maths Tutor
                    </h3>
                    <time>
                        Sep 2021 - Jul 2022
                    </time>
                    <p>
                        Mathematics tutor/ helper for GCSEs Students, whilst pursuing my AS 
                        Levels.
                    </p>
                </li>
                <li>
                    <h3>
                        School Uniform Direct | Sales Assistant
                    </h3>
                    <time>
                        Jul 2022 - Sep 2022
                    </time>
                    <p>
                        Working a part time job. 
                    </p>
                </li>
                <li>
                    <h3>
                        Ns Scripts | Founder
                    </h3>
                    <time>
                        May 2023 - Present
                    </time>
                    <p>
                        Founder of a small game development group. I create Lua programs for servers and provide customer service support, <a href="projects.html#">read more.</a>
                    </p>
                </li>
            </ul>
        </section>
        <section class="row-list">
            <h2>Licenses & Certifications</h2>
            <ul>
                <li>
                    <h3>
                        <a href="https://forage-uploads-prod.s3.amazonaws.com/completion-certificates/Moreton%20Bay%20Regional%20Council/7q8DN5enMzSHqLwev_Moreton%20Bay%20Regional%20Council_9MngsyTRatQiCRi6R_1709329960211_completion_certificate.pdf">Web Development Job Simulation | Forage, Moreton Bay</a>
                    </h3>
                    <time>
                        Issued: Mar 2024
                    </time>
                    <p>
                        This certificate demonstrates my understanding of web development, and my ability to plan a website using User Flow Diagrams and Site Maps.
                    </p>
                </li>
                <li>
                    <h3>
                        <a href="https://www.linkedin.com/learning/certificates/f874057226a5433c0f1b0ebedac54c87f85ce93a9a7eeba27a6da3c19a150253">Advanced Java Programming | LinkedIn</a>
                    </h3>
                    <time>
                        Issued: Mar 2024
                    </time>
                    <p>
                        This certificate demonstrates my understanding of advanced Java programming, including data structures, algorithms, object-oriented programming, networking, and multithreading.
                    </p>
                </li>
            </ul>
        </section>
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