DROP TABLE IF EXISTS clientTest;
DROP TABLE IF EXISTS articleTest;
/*DROP TABLE IF EXISTS administrateur;
DROP TABLE IF EXISTS commentaire;*/

CREATE TABLE users(
  usersId SERIAL PRIMARY KEY,
  usersName varchar(50) NOT NULL,
  usersUid varchar(50) NOT NULL,
  adresse1 varchar(50) DEFAULT NULL,
  codePostal1 int(11) DEFAULT NULL,
  ville varchar(50) DEFAULT NULL,
  adresse2 varchar(50) DEFAULT NULL,
  codePostal2 int(11) DEFAULT NULL,
  ville2 varchar(50) DEFAULT NULL,
  usersEmail varchar(50) DEFAULT NULL,
  usersPwd varchar(25) NOT NULL
);

CREATE TABLE administrateur (
	idAdmin SERIAL PRIMARY KEY,
	nom VARCHAR(50) NOT NULL,
	email VARCHAR(50) NOT NULL,
	tel int
);

INSERT INTO administrateur VALUES (1, "Adrien Palerm", "adrien.palerm33@gmail.com", 33778565703);

/*
CREATE TABLE articleTest (
	idArticle SERIAL PRIMARY KEY,
	corpsArticle TEXT NOT NULL,
	ecrivainArticle VARCHAR(50) NOT NULL,
	nom VARCHAR(50)
);

CREATE TABLE commentaire (
	idCommentaire SERIAL PRIMARY KEY,
	auteur VARCHAR(50),
	corps TEXT NOT NULL
); */
