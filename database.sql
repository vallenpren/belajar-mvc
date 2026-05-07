
CREATE DATABASE IF NOT EXISTS mvc_demo;
USE mvc_demo;


CREATE TABLE IF NOT EXISTS users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO users (name, email) VALUES 
('Admin Premium', 'admin@example.com'),
('John Doe', 'john@example.com');
