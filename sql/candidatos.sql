DROP TABLE IF EXISTS candidatos;

CREATE TABLE candidatos (
  id int unsigned NOT NULL AUTO_INCREMENT,
  nombre varchar(20) NOT NULL DEFAULT "",
  votos int NOT NULL DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO candidatos (id, nombre)
VALUES
	(1, "Donald Trump"),
	(2, "Nikki Haley"),
	(3, "Vivek Ramaswamy"),
	(4, "Asa Hutchinson"),
	(5, "Ron DeSantis");
