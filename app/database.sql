CREATE DATABASE login_app CHARACTER set utf8mb4 collate utf8mb4_general_ci;

USE login_app;

CREATE TABLE users(
	id_user int PRIMARY KEY AUTO_INCREMENT,
  email varchar(255) not null unique,
  password varchar(255) not null
);

INSERT INTO users (email, password) values ('teste@teste.com', SHA2('123456',256));