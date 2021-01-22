create or replace table objet (
	idObj int,
	nomObj varchar (50),
	description text,
	prix FLOAT(2),
	dispo boolean,
	nomCat varchar (12),

	constraint pk_objet PRIMARY KEY (idObj),
	constraint fk_objet_categorie FOREIGN KEY (categorie), 
);

create or replace table categorie (
	idCat int,
	nomCat varchar(12),
	description text,

	constraint pk_categorie PRIMARY KEY (idCat),
);

create or replace table panier (
	idPanier int,
	idObj int,
	nomObj varchar (50),
	prix FLOAT(2),
	
	constraint pk_pabier PRIMARY KEY (idPanier),
	constraint fk_panier_objet FOREIGN KEY (idObj),
	constraint fk_panier_objet FOREIGN KEY (nomObj),
	constraint fk_panier_objet FOREIGN KEY (prix),
);

