
# politician raing system
## Technologies used
- PHP
- Bootstrap css
- mysql database
## Features
- allow the users to enter their views,
- allow user to delete their views
- prevent user from reusing same email for ratings
- Saves the user input to the database

## how to test this program
- Ensure you have xamp server installed in your machine
- go to xamp start its server, open the xamp folder and navigate to htdocs folder
- create a folder called political, and copyt all these files in that folder
- open any of your browser and type in localhost/political/index.php
## Creating the database - Use any database of your choice
- create database political;
use political;
create table feedback(
id int primary key auto_increment,
name varchar(100),
email varchar(100) unique,
feedback text,
rating int(2),
submission_date datetime default current_timestamp
);