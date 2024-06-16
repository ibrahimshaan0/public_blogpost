# Assignment on PHP(LAB)
## Web Dev Lab assignment 

Instructions
1. You have to design and develop a fully functional website that meets the specified requirements and objectives.  

    SL              Description                                     Marks 

    1. Design front end using HTML and CSS                          5 

    2. Validate the form before any operation                       4 

    3. Insert your information into the database                    2 

    4. Use log-in session                                           3 

    5. Fetch Information from database and show on your webpage     3 

    6. Update and delete operations                                 4 

### Do This before run/compile/showoutput
import the public.sql file to your phpmyadmin databases
and username: public and password: pubic9090 to login to dashboard.

or do other steps


### db:
create database public;
### table: 
CREATE TABLE `public`.`admininfo` (`id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , UNIQUE `adminid` (`id`)) ENGINE = InnoDB;
### insert:
INSERT INTO `admininfo` (`id`, `username`, `password`) VALUES (NULL, 'public', '9090');

### blogs table:
CREATE TABLE `public`.`blogs` (`id` BIGINT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `description` VARCHAR(255) NOT NULL , `author` VARCHAR(255) NOT NULL , `img` VARCHAR(255) NOT NULL , UNIQUE `blogsid` (`id`)) ENGINE = InnoDB;
