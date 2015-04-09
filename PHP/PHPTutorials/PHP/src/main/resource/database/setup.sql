CREATE DATABASE test_site;

CREATE TABLE users (
	id int NOT NULL PRIMARY KEY,
	username varchar(25) NOT NULL,
	password varchar(100)
)
