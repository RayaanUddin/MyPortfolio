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
                <section id="education-level-2" hidden>
                    <div class="item-inner-container">
                        <h2>Level 2: GCSEs</h2>
                        <time class="other-information" datetime="2026">
                            2016 - 2021
                        </time>
                        <div class="box-list" id="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Delphi</li>
                                <li>Python (Basics)</li>
                            </ul>
                        </div>
                        <div class="main-information">
                            <p>
                                Completed GCSEs from Graveney School, London.

                            </p>
                        </div>
                        <table>
                            <tr>
                                <th>Subject</th>
                                <th colspan="2">Grade</th>
                            </tr>
                            <tr>
                                <td>Mathematics</td>
                                <td colspan="2">9</td>
                            </tr>
                            <tr>
                                <td>Further Mathematics</td>
                                <td colspan="2">9</td>
                            </tr>
                            <tr>
                                <td>Computer Science</td>
                                <td colspan="2">8</td>
                            </tr>
                            <tr>
                                <td>Design and Technology</td>
                                <td colspan="2">7</td>
                            </tr>
                            <tr>
                                <td>Combined Science</td>
                                <td>8</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>English Language</td>
                                <td colspan="2">6</td>
                            </tr>
                            <tr>
                                <td>English Literature</td>
                                <td colspan="2">6</td>
                            </tr>
                            <tr>
                                <td>Geography</td>
                                <td colspan="2">6</td>
                            </tr>
                            <tr>
                                <td>Religious Studies</td>
                                <td colspan="2">6</td>
                            </tr>
                        </table>
                        <aside>
                            <h3>New Grading System for GCSEs</h3>
                            <p>
                                New grading is a number scale. More information is available about it,
                                <a href="https://www.bbc.co.uk/news/education-48993830"> click here.</a> 
                            </p>
                        </aside>
                    </div>
                </section>
                <section id="education-level-3">
                    <div class="item-inner-container">
                        <h2>Level 3: A Levels</h2>
                        <time class="other-information" datetime="2023">
                            2021 - 2023
                        </time>
                        <div class="box-list" id="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Delphi</li>
                                <li>SQL</li>
                                <li>Statistics</li>
                                <li>HTML</li>
                                <li>JavaScript</li>
                            </ul>
                        </div>
                        <div class="main-information">
                            <p>Completed A-Levels from Graveney School, London.</p>
                            <p>
                                One of my main focus was Mathematics in A-level. 
                                I majored in OCR MEI Further Maths Statistics.
                                Using the knowledge I gained from A-levels, I was able to apply it to my computer science degree, to solve mathematical problems computationally.
                            </p>
                            <p>
                                I also took Computer Science as my third A-level, which was my passion, where I learned the how to create software for a user need along with documenting the process.
                                One of my projects was to create <a href="">a software that would help teachers write reports</a> for students and allow them to organise and store data of students.
                            </p>
                            <p>
                                Tutored GCSE students in Mathematics during my A-levels.
                            </p>
                        </div>
                        <table>
                            <tr>
                                <th>Subject</th>
                                <th>Grade</th>
                            </tr>
                            <tr>
                                <td>Mathematics</td>
                                <td>A*</td>
                            </tr>
                            <tr>
                                <td>Further Mathematics</td>
                                <td>A</td>
                            </tr>
                            <tr>
                                <td>Computer Science</td>
                                <td>A</td>
                            </tr>
                        </table>
                    </div>
                </section>
                <section id="education-level-6">
                    <div class="item-inner-container">
                        <h2>Level 6: BSc Computer Science</h2>
                        <time class="other-information" datetime="2026">
                            2023 - 2026
                        </time>
                        <div class="box-list" id="skills">
                            <h3>Skills</h3>
                            <ul>
                                <li>Java</li>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>JavaScript</li>
                                <li>PHP</li>
                            </ul>
                        </div>
                        <div class="main-information">
                            <p>
                                Currently, I am enrolled in a bachelor's program at Queen Mary University of London, studying computer science. 
                            </p>
                            <p>
                                This academic journey has been instrumental in honing my analytical and problem-solving skills, while also fostering a deep passion for technology and its transformative capabilities. 
                                My coursework has provided me with a solid foundation in programming languages, algorithms, and data structures, equipping me with the technical prowess required in the rapidly evolving field of computer science. 
                                Beyond the classroom, I have actively sought out opportunities to apply my knowledge through internships and personal projects, contributing to my practical understanding of software development and enhancing my ability to work collaboratively in dynamic team environments. 
                                As I continue to advance in my studies, I am eager to further explore cutting-edge technologies and contribute meaningfully to the ever-expanding landscape of computer science.
                            </p>                        
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