CREATE TABLE
    user (
        `id` int NOT NULL AUTO_INCREMENT,
        `name` varchar(50) NOT NULL,
        `password` varchar(20) NOT NULL,
        `email` varchar(50) NOT NULL,
        PRIMARY KEY (`id`)
    );