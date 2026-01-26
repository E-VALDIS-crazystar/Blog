CREATE DATABASE blog;
USE blog;

CREATE TABLE IF NOT EXISTS posts (

id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
content VARCHAR(5200)

);

CREATE TABLE if NOT EXISTS categories (

id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
category_name VARCHAR(25)

);

INSERT INTO posts (content)
VALUES 

("Gūltā bija tīri forši, kas gan var būt labāks par atpūtu."),
("Mājai jumts ir noārdīts, iekšējās sienas arī jau noardītas, daudz jau vairs neatliek."),
("Grupas Pērkons koncerts bija super, tikai nosala kājas, tapēc ilgi tur nepalikām.");

INSERT INTO categories (category_name)
VALUES 

("Svētki"),
("Mūzika"),
("Sports");

