
# Politician rating system
## Technologies used
- PHP - for sending and retrieving the data from the database
- Bootstrap CSS - for styling
- MySQL database - for data storage
- javascript for form validation
- HTML - setting up the structure of the form
## Features
- allow the users to enter their views,
- allow the user to delete their views
- prevent users from reusing the same email for ratings
- Saves the user input to the database

## how to test this program
- Ensure you have xamp server installed on your machine
- go to xamp start its server, open the xamp folder, and navigate to htdocs folder
- create a folder called political, and copy all these files into that folder
- open any of your browser and type in localhost/political/index.php
## Creating the database - Use any database of your choice
- create a database political;
use political;
create table feedback(
id int primary key auto_increment,
name varchar(100),
email varchar(100) unique,
feedback text,
rating int(2),
submission_date date, time default current_timestamp

## VIEW COMMENTS PAGE
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/1d0db404-4885-403d-bc8a-db4202d95f95)
## USER INPUT PAGE
- javascript ensures that we do not submit empty fields
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/dc7c8d3f-2236-4092-94a2-e055fe7a5423)

## submit page 
- shows an alert that the data has been successfully submitted, then a nav bar to take the user back to the home/input form or the view ratings/view comments page
- 
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/4ee048b2-8abf-4953-82c0-dca77f80d582)
## The database
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/758d8362-4b55-4ead-9a0c-02f804e34cad)

