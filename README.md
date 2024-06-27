- create database political;
 use political;
create table feedback(
id int primary key auto_increment,
name varchar(100),
email varchar(100),
feedback text,
rating int(2),
submission_date datetime default current_timestamp
);