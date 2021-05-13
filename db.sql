DROP DATABASE IF EXISTS phpinfosec;

CREATE DATABASE phpinfosec;

USE phpinfosec;

CREATE TABLE contacts
(
	id integer not null primary key auto_increment,
	name varchar(255) not null,
	email varchar(255) not null,
	message varchar(255) not null
);
INSERT INTO contacts VALUES(1,'Mauro','mauro.chojrin@leewayweb.com','First message');
INSERT INTO contacts VALUES(2,'Maria','maria.pappen@gmail.com','Second message');
INSERT INTO contacts VALUES(3,'Pedro','pdaguerre@hotmail.com','Third message');

CREATE TABLE IF NOT EXISTS users
(
	id integer not null primary key auto_increment,
	username varchar(255) not null,
	password varchar(255) not null
);

INSERT INTO users VALUES(1,'mchojrin','mauro');
INSERT INTO users VALUES(2,'pepe','1234');
CREATE UNIQUE INDEX users_name_uindex
	on users (username);
