CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    usuario VARCHAR(50) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    nome VARCHAR(100),
    idade INT,
    data_cadastro DATE,
    cep VARCHAR(10),
    rua VARCHAR(100),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    estado VARCHAR(2)
);
