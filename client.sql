DROP TABLE IF EXISTS clientTest;
DROP TABLE IF EXISTS articleTest;
DROP TABLE IF EXISTS administrateur;
DROP TABLE IF EXISTS commentaire;

CREATE TABLE clientTest (
	idClient SERIAL PRIMARY KEY,
	nom VARCHAR(50) NOT NULL,
	prenom VARCHAR(50) NOT NULL,
	adresse1 VARCHAR(50),
	codePostal1 int,
	ville VARCHAR(50),
	adresse2 VARCHAR(50),
	codePostal2 int,
	ville2 VARCHAR(50),
	tel int,
	email VARCHAR(50)
);

CREATE TABLE administrateur (
	idAdmin SERIAL PRIMARY KEY,
	nom VARCHAR(50)
);

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