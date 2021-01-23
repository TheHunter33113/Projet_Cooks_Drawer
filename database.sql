DROP TABLE IF EXISTS objet;
DROP TABLE IF EXISTS categorie;

CREATE TABLE objet (
	idObj serial PRIMARY KEY,
	nomObj varchar (50),
	description text,
	prix FLOAT(2),
	dispo boolean,
	nomCat varchar (12),

	constraint fk_objet_categorie FOREIGN KEY (nomCat) REFERENCES categorie (nomCat)
);

CREATE TABLE categorie (
	idCat serial PRIMARY KEY,
	nomCat varchar(12),
	description text


);

/*create or replace table panier (
	idPanier serial PRIMARY KEY,
	idObj int,
	nomObj varchar (50),
	prix FLOAT(2),

	constraint fk_panier_objet FOREIGN KEY (idObj) REFERENCES objet (idObj),
	constraint fk_panier_objet FOREIGN KEY (nomObj) REFERENCES objet (nomObj),
	constraint fk_panier_objet FOREIGN KEY (prix) REFERENCES objet (prix),
);

create or replace table commande (
	idCom int,
	dateCom date,
	prix FLOAT(2),
	dateLivraison date,

	constraint pk_panier PRIMARY KEY (idPanier)
);*/s