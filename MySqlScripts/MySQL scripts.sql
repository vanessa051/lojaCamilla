
CREATE TABLE produtos (
    id INTEGER AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
	preco DECIMAL(10, 2),
    qtdest INT(4) NOT NULL,
    descricao TEXT NOT NULL,
	usado BOOLEAN DEFAULT FALSE,
    categoria_id INTEGER,
    PRIMARY KEY (id)
);

CREATE TABLE categorias(
	id INTEGER AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    primary key (id)
);

INSERT INTO categorias VALUES (1,'PAPELARIA');
INSERT INTO categorias VALUES (2, 'ELETRÔNICOS');
INSERT INTO categorias VALUES (3, 'INSTRUMENTOS MUSICAIS');
INSERT INTO categorias VALUES (4, 'ESPORTES');
INSERT INTO categorias VALUES (5, 'CAMA MESA E BANHO');



CREATE TABLE usuarios(
	id INTEGER AUTO_INCREMENT NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    primary key (id)
);

INSERT INTO usuarios (email, senha) VALUES('pantojacamilla@gmail.com', 'e8d95a51f3af4a3b134bf6bb680a213a');

INSERT INTO usuarios (email, senha) VALUES('prof.fadul@gmail.com', '202cb962ac59075b964b07152d234b70');

INSERT INTO usuarios (email, senha) VALUES('jfadul@uepa.com', '202cb962ac59075b964b07152d234b70');

CREATE TABLE votos(
	id INTEGER AUTO_INCREMENT NOT NULL,
    categoria VARCHAR(255) NOT NULL,
    qtd_votos VARCHAR(255) NOT NULL,
    primary key (id)
);

INSERT INTO votos (id, categoria, qtd_votos) VALUES (1, 'excelente', 0), (2, 'bom', 0), (3, 'regular', 0), (4, 'ruim', 0);

CREATE TABLE ip(
    id INTEGER AUTO_INCREMENT NOT NULL,
    ip VARCHAR(225),
    PRIMARY KEY (id) 
)

-- A SENHA É: senha


