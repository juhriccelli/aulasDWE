DROP TABLE IF EXISTS paciente_medico;
DROP TABLE IF EXISTS paciente;
DROP TABLE IF EXISTS medico;
DROP TABLE IF EXISTS especialidade;

CREATE TABLE paciente(
	id_paciente int PRIMARY KEY,
	nome varchar(50) NOT NULL,
	cpf varchar(20) NOT NULL UNIQUE,
	data_nascimento date NOT NULL,
	sexo char(1) NOT NULL
);

INSERT INTO paciente VALUES (1, 'Ubaldo', '123', '1983-01-10', 'M');
INSERT INTO paciente VALUES (2, 'Silvia', '456', '1989-10-03', 'F');
INSERT INTO paciente VALUES (3, 'Rogério', '789', '1985-09-05', 'M');

CREATE TABLE especialidade(
	id_especialidade int PRIMARY KEY,
	descricao varchar(100) NOT NULL
);

INSERT INTO especialidade VALUES (1, 'Geriatria');
INSERT INTO especialidade VALUES (2, 'Pediatria');
INSERT INTO especialidade VALUES (3, 'Urologia');

CREATE TABLE medico(
	id_medico int PRIMARY KEY,
	nome varchar(50) NOT NULL,
	crm varchar(20) NOT NULL UNIQUE,
	id_especialidade int,
	FOREIGN KEY(id_especialidade) REFERENCES especialidade(id_especialidade)
);

INSERT INTO medico VALUES (1, 'Roberto', '555', 1);
INSERT INTO medico VALUES (2, 'Maria', '444', 1);
INSERT INTO medico VALUES (3, 'David', '333', 2);
INSERT INTO medico VALUES (4, 'Margarida', '111', 3);

/* CE: atendido */
CREATE TABLE paciente_medico(
	id_medico int,
	id_paciente int,
	PRIMARY KEY(id_medico, id_paciente)
);

INSERT INTO paciente_medico VALUES (1, 2);
INSERT INTO paciente_medico VALUES (1, 3);
INSERT INTO paciente_medico VALUES (4, 1);
INSERT INTO paciente_medico VALUES (4, 3);