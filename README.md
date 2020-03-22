#Padavan - Wifidog_server
A simple wifidog auth program writed with PHP
# database
CREATE DATABASE wifi;
use wifi;
CREATE TABLE IF NOT EXISTS `users` (
  `userid` char(16)  primary key,
  `userpass` varchar(32) NOT NULL,
  `usertoken` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
insert into wifi.users(userid,userpass) values("root","admin");