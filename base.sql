
CREATE TABLE admin (
    email VARCHAR(20),
    pwd VARCHAR(10)
);

CREATE TABLE category (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20)
);

CREATE TABLE proprietaire(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(20),
    email VARCHAR(20),
    pwd VARCHAR(10)
);

CREATE TABLE objects (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idP INT,
    idC INT,
    nom VARCHAR(20),
    price DOUBLE,
    description varchar(200),
    FOREIGN KEY (idP) REFERENCES proprietaire(id),
    FOREIGN KEY (idC) REFERENCES category(id)
);

CREATE TABLE listImg(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idO INT,
    dir VARCHAR(20),
    FOREIGN KEY (idO) REFERENCES objects(id)
);

CREATE TABLE proposition(
    id INT PRIMARY KEY AUTO_INCREMENT,
    idD INT,
    idO1 INT,
    idO2 INT,
    idR INT,
    dateProps DATETIME,
    valide int default 0,
    FOREIGN KEY (idD) REFERENCES proprietaire(id),
    FOREIGN KEY (idO1) REFERENCES objects(id),
    FOREIGN KEY (idO2) REFERENCES objects(id),
    FOREIGN KEY (idR) REFERENCES proprietaire(id)
);

CREATE TABLE historic (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idpropo INT,
    FOREIGN KEY (idpropo) REFERENCES proposition(id)
);

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;