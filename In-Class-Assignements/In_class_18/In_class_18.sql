CREATE DATABASE `in_class_17`;

CREATE TABLE `USERS`
(
    `ID`        int(11) NOT NULL AUTO_INCREMENT,
    `FirstName` varchar(80) NOT NULL,
    `LastName`  varchar(80) NOT NULL,
    PRIMARY KEY (`ID`)
);

CREATE TABLE `USERCOMMENTS`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `user_id`   int(11) NOT NULL,
    `title`     varchar(80) NOT NULL,
    `comments`  varchar(255) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `USERS`(`ID`)
);

USE `in_class_17`;

INSERT INTO `USERS` (`FirstName`, `LastName`) VALUES 
('Alice', 'Johnson'),
('Bob', 'Smith'),
('Charlie', 'Brown');

INSERT INTO `USERCOMMENTS` (`user_id`, `title`, `comments`) VALUES 
(1, 'Great Work', 'Alice is doing a great job!'),
(1, 'Follow Up', 'Alice needs to submit her report.'),
(2, 'Meeting Reminder', 'Bob has a meeting at 3 PM.');

SELECT USERS.ID, USERS.FirstName, USERS.LastName, USERCOMMENTS.title, USERCOMMENTS.comments
FROM USERS
LEFT JOIN USERCOMMENTS ON USERS.ID = USERCOMMENTS.user_id;

SELECT USERS.ID, USERS.FirstName, USERS.LastName, USERCOMMENTS.title, USERCOMMENTS.comments
FROM USERS
INNER JOIN USERCOMMENTS ON USERS.ID = USERCOMMENTS.user_id;
