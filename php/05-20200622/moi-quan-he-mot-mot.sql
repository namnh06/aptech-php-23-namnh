CREATE DATABASE aptech_php_23_05;

CREATE TABLE aptech_php_23_05.users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) UNIQUE
);

CREATE TABLE aptech_php_23_05.passports (
	id INT PRIMARY KEY AUTO_INCREMENT,
    serial VARCHAR(20) UNIQUE,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO aptech_php_23_05.users (name)
VALUES ('Nam'),
('Nu'),
('Thanh');

INSERT INTO aptech_php_23_05.passports 
(serial,user_id)
VALUES ('a',3),
('b',1),
('c',2);

SELECT * FROM aptech_php_23_05.users;
SELECT * FROM aptech_php_23_05.passports;

SELECT a.id, a.name, b.serial FROM 
aptech_php_23_05.users AS a
JOIN 
aptech_php_23_05.passports AS b
ON a.id = b.user_id
WHERE b.serial = 'b';