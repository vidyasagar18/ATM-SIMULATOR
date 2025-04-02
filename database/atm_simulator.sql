CREATE DATABASE atm_simulator;
USE atm_simulator;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255),
    balance DECIMAL(10,2) DEFAULT 0.00
);

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    details VARCHAR(255),
    amount DECIMAL(10,2),
    FOREIGN KEY (user_id) REFERENCES users(id)
);
