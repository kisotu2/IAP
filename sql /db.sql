USE ics_e;

CREATE TABLE IF NOT EXISTS  `users` (
    `userId` bigint (10) NOT  NULL  AUTO_INCREMENT,
    `fullname` varchar (50) not null default '',
    `email` varchar (70) not null default '',
   `username` varchar (70) not null default '',
    `password` varchar (70) not null default '',
    `updated` datetime not null default  current_timestamp () on update current_timestamp (),
    `created`  datetime not null default  current_timestamp (),
    `genderId` tinyint  (1) not null default 0,
    `roleId`  tinyint  (1) not null default 0,
    UNIQUE KEY (`username`),
    UNIQUE KEY (`email`),
    PRIMARY KEY (`userId`)
);