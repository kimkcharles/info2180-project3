-- STILL WORKING ON IT 
-- mysql-ctl start
-- mysql-ctl cli
-- source schema.sql

DROP DATABASE IF EXISTS hireme;
CREATE DATABASE hireme;
USE hireme;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT, 
firstname VARCHAR(32) NOT NULL, 
lastname VARCHAR(32) NOT NULL, 
username VARCHAR(16) DEFAULT "member",
password VARCHAR(16) NOT NULL,
telephone VARCHAR(32) NOT NULL, 
email VARCHAR(32) NOT NULL,
date_joined DATE -- 'YYYY-MM-DD'
);
-- ALTER TABLE users AUTO_INCREMENT=10000;
INSERT INTO users (firstname, lastname, username, password, telephone, email, date_joined)
VALUES ("Kim", "Kim","admin","password123", "876-444-5555","admin@hireme.com", "2000-11-11");


DROP TABLE IF EXISTS jobs;
CREATE TABLE jobs (
id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
job_title VARCHAR(50) NOT NULL,
job_description VARCHAR(255) NOT NULL,
category VARCHAR(50) NOT NULL,
company_name VARCHAR(50) NOT NULL,
company_location VARCHAR(100) NOT NULL,
date_posted DATE
);


DROP TABLE IF EXISTS jobs_applied_for;
CREATE TABLE jobs_applied_for (
id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
job_id INT UNSIGNED NOT NULL,
user_id INT UNSIGNED NOT NULL ,
date_applied DATE
);




