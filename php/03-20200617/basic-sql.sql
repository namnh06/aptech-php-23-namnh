CREATE DATABASE aptech_php_23;

CREATE TABLE aptech_php_23.users (
	id INT,
    name varchar(255),
    password varchar(255)
);

INSERT INTO aptech_php_23.users
(id, name, password)
VALUES (1, 'namcoi.com', 'abc123'),
(2, 'nu', '123'),
(3, 'Thanh', 'quenroi');

SELECT * FROM aptech_php_23.users;
SELECT * FROM aptech_php_23.users
WHERE id = 3;

DROP TABLE aptech_php_23.users;
CREATE TABLE aptech_php_23.users (
	id INT PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) UNIQUE,
    password varchar(255)
);

INSERT INTO aptech_php_23.users
(name, password)
VALUES ('Nam', '123'),
('Nu', '333'),
('Thanh', 'quenroi');

SELECT * FROM aptech_php_23.users;
