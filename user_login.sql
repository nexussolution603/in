CREATE DATABASE IF NOT EXISTS user_login;
USE user_login;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    gender VARCHAR(10),
    mobile VARCHAR(15),
    password VARCHAR(255)
);


