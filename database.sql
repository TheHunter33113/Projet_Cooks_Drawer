create or replace table objet (
	idObj int,
	nom varchar (50),
	description text,
	prix FLOAT(2),
	dispo boolean,
	categorie varchar (12),

	constraint pk_objet PRIMARY KEY (idObj),
)

create or replace table categorie (
	idCat int,
	nom varchar(12),
	description text,

	constraint pk_categorie PRIMARY KEY (idCat),
)