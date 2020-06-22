CREATE DATABASE aptech_php_23_05;

-- ONE TO ONE RELATIONSHIP

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


-- ONE TO MANY RELATIONSHIP
CREATE TABLE aptech_php_23_05.vehicles (
	id INT PRIMARY KEY AUTO_INCREMENT,
    bien_so VARCHAR(3) UNIQUE,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO aptech_php_23_05.vehicles (bien_so, user_id)
VALUES ('3A2',2),('99B',2),('269',1);

SELECT * FROM aptech_php_23_05.vehicles;

SELECT a.name, b.bien_so 
FROM aptech_php_23_05.users AS a
JOIN aptech_php_23_05.vehicles AS b
ON a.id = b.user_id
WHERE a.name = 'Nu';

-- MANY TO MANY
CREATE TABLE aptech_php_23_05.subjects (
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) UNIQUE
);

INSERT INTO aptech_php_23_05.subjects (name)
VALUES ('PHP'),('JS'),('HTML'),('CSS');

CREATE TABLE aptech_php_23_05.subject_user(
	id INT PRIMARY KEY AUTO_INCREMENT,
    subject_id INT,
    user_id INT,
    FOREIGN KEY (subject_id) REFERENCES subjects(id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

INSERT INTO aptech_php_23_05.subject_user (subject_id,user_id)
VALUES (1,2),(1,3),(2,1),(2,3),(3,3);

-- QUERY LAY TAT CA MON HOC CUA HOC VIEN CO ID = 3 VA TEN CUA HO
SELECT b.name as user_name, 
c.name AS subject_name 
FROM aptech_php_23_05.subject_user AS a
JOIN aptech_php_23_05.users AS b
ON a.user_id = b.id
JOIN aptech_php_23_05.subjects AS c
ON a.subject_id = c.id
WHERE a.subject_id = 1;

SELECT * FROM aptech_php_23_05.users;