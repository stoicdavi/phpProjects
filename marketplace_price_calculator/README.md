# MARKET PLACE CALCULATOR APP
- This is a simple app project that
- Allows user to register using a unique username
- Allows only registered users to log in
- Allows a user to calculate the selling price of products they wish to

## To test this on your machine
- Ensure you have xampp server installed
- clone this in your xampp- htdocs folder, start your xampp server
- navigate to your browser, type in the search bar localhost/' followed by the path of the location of your file'

## To start working on this project, Create a database with any name of your preference
-  create a table using this SQL statement, copy and paste it into your 

Create a database marketplace;
use marketplace;

CREATE table registration
(
id int auto_increment primary key,
username varchar(50),
password varchar(50)
);
- alter the table to allow unique user names only- i.e does not allow a username to be repeated
Alter table registration add unique(`username`);
## Open the connect.php file and append the required data to connect with your database

## Technologies used 
- PHP
- Bootstrap
- HTML
- MySQL workbench database

#### the signup page
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/f17a2d8e-b0ef-4763-b736-2419c2493310)
- you cannot register using the same username you'll get an error message
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/c5311ad7-8da2-4e7f-be02-1a9d92563d1a)
#### Login page
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/7de7eb0e-03e7-4f83-ba15-a9766f8aaa1d)
- it ensures that only registered users can log in using the right password and username
#### On successful login
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/2a08f0ad-cae6-401f-b594-be2830a628de)
- when you click logout on the marketplace page, you are directed back to the login page.
### How the database appears, I did not hash the passwords which is why they can be seen as real numbers in the db as shown below
![image](https://github.com/stoicdavi/phpProjects/assets/117593948/de09298a-b3ce-46d6-bcd1-00e1125e8282)
