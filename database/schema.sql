create table user(
    user_id int primary key auto_increment,
    username varchar(30) unique,
    email varchar(40) unique,
    password varchar(120)
);
create table contact(
    contact_id int primary key auto_increment,
    first_name varchar(30),
    last_name varchar(30),
    email varchar(30),
    birthday date,
    contact_of int,
    constraint fk_user foreign key (contact_of) references user(user_id) 
);