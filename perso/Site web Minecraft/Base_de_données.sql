CREATE DATABASE Site_minecraft;

CREATE TABLE utilisateurs (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nom VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  mot_de_passe VARCHAR(255) NOT NULL,
  date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE sessions (
  id INT(11) NOT NULL AUTO_INCREMENT,
  utilisateur_id INT(11) NOT NULL,
  jeton VARCHAR(255) NOT NULL,
  date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  FOREIGN KEY (utilisateur_id) REFERENCES utilisateurs(id)
);

CREATE TABLE jetons_de_reinitialisation (
    id INT(11) NOT NULL AUTO_INCREMENT,
    utilisateur_id INT(11) NOT NULL,
    jeton VARCHAR(255) NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (utilisateur_id)
    REFERENCES utilisateurs (id)
);