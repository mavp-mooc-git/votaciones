DROP TABLE IF EXISTS regiones;

CREATE TABLE regiones (
  id int unsigned NOT NULL AUTO_INCREMENT,
  nombre varchar(45) NOT NULL DEFAULT "",
  code varchar(4) NOT NULL DEFAULT "",
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO regiones (id, nombre, code)
VALUES
	(1, "Arica y Parinacota", "XV"),
	(2, "Tarapacá", "I"),
	(3, "Antofagasta", "II"),
	(4, "Atacama", "III"),
	(5, "Coquimbo", "IV"),
	(6, "Valparaiso", "V"),
	(7, "Metropolitana de Santiago", "RM"),
	(8, "Libertador General Bernardo O\'Higgins", "VI"),
	(9, "Maule", "VII"),
	(10, "Biobío", "VIII"),
	(11, "La Araucanía", "IX"),
	(12, "Los Ríos", "XIV"),
	(13, "Los Lagos", "X"),
	(14, "Aisén del General Carlos Ibáñez del Campo", "XI"),
	(15, "Magallanes y de la Antártica Chilena", "XII");
