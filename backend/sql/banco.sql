CREATE DATABASE IF NOT EXISTS car_showroom

    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE car_showroom;

CREATE TABLE IF NOT EXISTS mensagens (

    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(60) NOT NULL,
    email VARCHAR(120) NOT NULL,
    assunto VARCHAR(20) NOT NULL,
    mensagem TEXT NOT NULL,
    criada_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS veiculos (

    id_cadastro INT AUTO_INCREMENT NOT NULL,
    motor VARCHAR(65) NOT NULL,
    cambio VARCHAR(50) NOT NULL,
    quilometragem_km INT DEFAULT 0,
    donos_ant INT DEFAULT 1,
    capacidade INT NOT NULL,
    combustivel VARCHAR(50) NOT NULL,
    cor VARCHAR(30) NOT NULL,
    preco DOUBLE(12,2) NOT NULL,
    ano INT NOT NULL,
    modelo VARCHAR(100) NOT NULL
    CONSTRAINT id_carro PRIMARY KEY (id_cadastro)
);
