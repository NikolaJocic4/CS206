-- Create database
CREATE DATABASE IF NOT EXISTS fresco;

-- Use database
USE fresco;

-- Create User table
CREATE TABLE IF NOT EXISTS User (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- Create Reviews table
CREATE TABLE IF NOT EXISTS Reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    art_name VARCHAR(255) NOT NULL
);

-- Create UserReviews table
CREATE TABLE IF NOT EXISTS UserReviews (
    user_id INT,
    review_id INT,
    FOREIGN KEY (user_id) REFERENCES User(id),
    FOREIGN KEY (review_id) REFERENCES Reviews(id),
    PRIMARY KEY (user_id, review_id)
);

-- Create Art table
CREATE TABLE IF NOT EXISTS Art (
    art_name VARCHAR(255) PRIMARY KEY,
    art_folder_destination VARCHAR(255) NOT NULL,
    art_epoch VARCHAR(255) NOT NULL
);
