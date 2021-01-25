DROP TABLE IF EXISTS objet;
DROP TABLE IF EXISTS categorie;

CREATE TABLE objet (
	idObj serial PRIMARY KEY,
	nomObj varchar (50),
	description text,
	prix FLOAT(2),
	artisan varchar (25),
	dispo int,
	nomCat varchar (12),

	constraint fk_objet_categorie FOREIGN KEY (nomCat) REFERENCES categorie (nomCat)
);

CREATE TABLE categorie (
	idCat serial PRIMARY KEY,
	nomCat varchar(12)
);
INSERT INTO `objet` (`idObj`, `nomObj`, `description`, `prix`, `artisan`, `dispo`, `nomCat`) VALUES ('1', 'Kiritsuke', NULL, '1', 'Satsuki', '1', 'Couteau');
