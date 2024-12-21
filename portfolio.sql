CREATE TABLE `accounts` (
                            `accountId` int(11) NOT NULL,
                            `fname` varchar(50) NOT NULL,
                            `lname` varchar(50) NOT NULL,
                            `email` varchar(320) NOT NULL,
                            `password` varchar(60) NOT NULL,
                            `permission` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `blog` (
                        `blogId` int(11) NOT NULL,
                        `title` varchar(50) NOT NULL,
                        `date` datetime NOT NULL,
                        `content` longtext NOT NULL,
                        `accountId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `certification` (
                                 `certificationId` int(11) NOT NULL,
                                 `title` text NOT NULL,
                                 `date` date NOT NULL,
                                 `description` longtext NOT NULL,
                                 `issuedBy` text NOT NULL,
                                 `link` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `comments` (
                            `commentId` int(11) NOT NULL,
                            `comment` longtext NOT NULL,
                            `date` datetime NOT NULL,
                            `accountId` int(11) NOT NULL,
                            `blogId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `education` (
                             `educationId` int(11) NOT NULL,
                             `title` text NOT NULL,
                             `description` longtext NOT NULL,
                             `startDate` date NOT NULL,
                             `endDate` date DEFAULT NULL,
                             `backgroundImage` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `education_grades` (
                                    `gradeId` int(11) NOT NULL,
                                    `educationId` int(11) NOT NULL,
                                    `subject` varchar(255) NOT NULL,
                                    `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `education_skills` (
                                    `skillId` int(11) NOT NULL,
                                    `educationId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `experience` (
                              `experienceId` int(11) NOT NULL,
                              `company` text NOT NULL,
                              `job` text NOT NULL,
                              `description` longtext NOT NULL,
                              `startDate` date NOT NULL,
                              `endDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `projects` (
                            `projectId` int(11) NOT NULL,
                            `title` text NOT NULL,
                            `description` longtext NOT NULL,
                            `furtherInformation` longtext,
                            `startDate` date NOT NULL,
                            `endDate` date DEFAULT NULL,
                            `github` text,
                            `backgroundImage` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `project_skills` (
                                  `skillId` int(11) NOT NULL,
                                  `projectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `skills` (
                          `skillId` int(11) NOT NULL,
                          `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `accounts`
    ADD PRIMARY KEY (`accountId`);

ALTER TABLE `blog`
    ADD PRIMARY KEY (`blogId`);

ALTER TABLE `certification`
    ADD PRIMARY KEY (`certificationId`);

ALTER TABLE `comments`
    ADD PRIMARY KEY (`commentId`);

ALTER TABLE `education`
    ADD PRIMARY KEY (`educationId`);

ALTER TABLE `education_grades`
    ADD PRIMARY KEY (`gradeId`),
    ADD KEY `educationId` (`educationId`);

ALTER TABLE `education_skills`
    ADD PRIMARY KEY (`educationId`,`skillId`),
    ADD KEY `skillId` (`skillId`);

ALTER TABLE `experience`
    ADD PRIMARY KEY (`experienceId`);

ALTER TABLE `projects`
    ADD PRIMARY KEY (`projectId`);

ALTER TABLE `project_skills`
    ADD PRIMARY KEY (`projectId`,`skillId`),
    ADD KEY `Skills` (`skillId`);

ALTER TABLE `skills`
    ADD PRIMARY KEY (`skillId`);


ALTER TABLE `accounts`
    MODIFY `accountId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `blog`
    MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `certification`
    MODIFY `certificationId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `comments`
    MODIFY `commentId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `education`
    MODIFY `educationId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `education_grades`
    MODIFY `gradeId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `experience`
    MODIFY `experienceId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `projects`
    MODIFY `projectId` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `skills`
    MODIFY `skillId` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `education_grades`
    ADD CONSTRAINT `education_grades_ibfk_1` FOREIGN KEY (`educationId`) REFERENCES `education` (`educationId`) ON DELETE CASCADE;

ALTER TABLE `education_skills`
    ADD CONSTRAINT `education_skills_ibfk_1` FOREIGN KEY (`educationId`) REFERENCES `education` (`educationId`) ON UPDATE CASCADE,
    ADD CONSTRAINT `education_skills_ibfk_2` FOREIGN KEY (`skillId`) REFERENCES `skills` (`skillId`) ON UPDATE CASCADE;

ALTER TABLE `project_skills`
    ADD CONSTRAINT `Project` FOREIGN KEY (`projectId`) REFERENCES `projects` (`projectId`),
    ADD CONSTRAINT `Skills` FOREIGN KEY (`skillId`) REFERENCES `skills` (`skillId`) ON UPDATE CASCADE;
COMMIT;
