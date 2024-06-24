CREATE DATABASE IF NOT EXISTS demo;

USE demo;

CREATE TABLE IF NOT EXISTS Product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    description TEXT
);

CREATE TABLE IF NOT EXISTS Category_Product (
    id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255)
);

ALTER TABLE Product
ADD COLUMN category_id INT,
ADD CONSTRAINT fk_category
    FOREIGN KEY (category_id) 
    REFERENCES Category_Product(id);


