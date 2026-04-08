CREATE DATABASE blog;
USE blog;

CREATE TABLE IF NOT EXISTS categories (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    category_name VARCHAR(25)
);

CREATE TABLE IF NOT EXISTS posts (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    content VARCHAR(5200),
    category_id INT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
    ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS comments (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Autors VARCHAR(50),
    Komentars VARCHAR(100),
    Izveidots DATETIME,
    post_id INT,
    FOREIGN KEY (post_id) REFERENCES posts(id)
);

INSERT INTO categories (category_name)
VALUES 
("Svētki"),
("Mūzika"),
("Sports"),
("Atpūta"),
("Hobiji");

INSERT INTO posts (content, category_id)
VALUES 
("Gūltā bija tīri forši, kas gan var būt labāks par atpūtu.", 4),
("Mājai jumts ir noārdīts, iekšējās sienas arī jau noardītas, daudz jau vairs neatliek.", 5),
("Grupas Pērkons koncerts bija super, tikai nosala kājas, tapēc ilgi tur nepalikām.", 2),
('Februāra mēnesī biju divos grupas "Lādezers" koncertos', 2);







