CREATE DATABASE assignment03;
GRANT USAGE ON *.* TO app@localhost IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON assignment03.* TO app@localhost;

USE assignment03;

DROP TABLE IF EXISTS products;

CREATE TABLE products(
    category VARCHAR(50) not null,
	code VARCHAR(50) NOT NULL,
	name VARCHAR(50) NOT NULL,
	price int NOT NULL,
	PRIMARY KEY (code)
);

INSERT INTO products(category, code, name, price)
VALUES('guitars', 'GIB', 'Gibson', 699),
    ('basses', 'FEN', 'Fender', 1199),
    ('guitars', 'SEA', 'Seagull', 2517),
    ('basses', 'IBA', 'Ibanez', 489),
    ('guitars', 'YAM', 'Yamaha', 299),
    ('basses', 'ERN', 'Ernie Ball', 780),
    ('guitars', 'EPI', 'Epiphone', 500),
    ('drums', 'LUD', 'Ludwig Classic', 6303),
    ('guitars', 'RIC', 'Rickenbacker', 2099),
    ('drums', 'TAM', 'Tamar Starclassic', 470),
    ('basses', 'HOF', 'Hofner', 2550),
    ('drums', 'PEA', 'Pearl Workshop Design', 300),
    ('basses', 'SCH', 'Schecter', 250),
    ('drums', 'DWC', 'DW Collectors Exotic', 1788),
    ('drums', 'SON', 'Sonor SQ2', 600);

