-- Admin
CREATE TABLE admin (
    email VARCHAR(20),
    pwd VARCHAR(10)
);

CREATE TABLE category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20)
);

CREATE TABLE objects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idP INT,
    idC INT,
    nom VARCHAR(20),
    price DOUBLE,
    FOREIGN KEY (idP) REFERENCES proprietaire(id),
    FOREIGN KEY (idC) REFERENCES category(id)
);

CREATE TABLE listImg(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idO INT,
    dir VARCHAR(20),
    FOREIGN KEY (idO) REFERENCES objects(id)
);

-- Frontoffice
CREATE TABLE proprietaire(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    email VARCHAR(20),
    pwd VARCHAR(10)
);

CREATE TABLE proposition(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idD INT,
    idO1 INT,
    idO2 INT,
    idR INT,
    dateProps DATETIME,
    FOREIGN KEY (idD) REFERENCES proprietaire(id),
    FOREIGN KEY (idO1) REFERENCES objects(id),
    FOREIGN KEY (idO2) REFERENCES objects(id),
    FOREIGN KEY (idR) REFERENCES proprietaire(id)
);

CREATE TABLE demande(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idPr INT,
    dateAccept DATETIME,
    FOREIGN KEY (idPr) REFERENCES proposition(id)
);

CREATE TABLE historic (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idO INT,
    idP INT,
    idD INT,
    FOREIGN KEY (idO) REFERENCES objects(id),
    FOREIGN KEY (idP) REFERENCES proprietaire(id),
    FOREIGN KEY (idD) REFERENCES demande(id)
);

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;