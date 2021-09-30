-- Banco de Dados da Aplicação "Sem Nome"
-- CUIDADO! ALTAMENTE DESTRUTIVO
-- Apague este arquivo quando a modelagem estiver concluída!

-- Apagando o banco de dados caso ele já exista 
DROP DATABASE IF EXISTS mpizzaria;  
 
-- Criando o banco de dados em UTF-8 e com buscas case-insensitive
CREATE DATABASE mpizzaria CHARACTER SET utf8 COLLATE utf8_general_ci;  

-- Selecionando o banco de dados
USE mpizzaria;

-- Criando tabela "cadastro Usuario"
 CREATE TABLE pedidos (
    email_user VARCHAR(50) PRIMARY KEY NOT NULL,
    nome_user VARCHAR(100) NOT NULL,
    tel_user VARCHAR(30) NOT NULL,
    endereco_user VARCHAR(255) NOT NULL,
    pizza_user VARCHAR(100) NOT NULL,
    bebida_user VARCHAR(100) NOT NULL,
    data_cadastro DATETIME NOT NULL
);  

-- Criando a tabela "contatos"
CREATE TABLE contatos (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- "AAAA-MM-DD hh:mm:ss"
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    assunto VARCHAR(255) NOT NULL,
    mensagem TEXT,
    campo1 TEXT COMMENT 'Para uso futuro',
    campo2 TEXT COMMENT 'Para uso futuro',
    status ENUM('recebido', 'lido', 'respondido', 'apagado') DEFAULT 'recebido'
);