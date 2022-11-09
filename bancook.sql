-- Active: 1667947189088@@127.0.0.1@3310@loja3
CREATE TABLE
    funcionario (
        situacao TINYINT,
        telefone VARCHAR(15),
        funcao VARCHAR(50),
        cpf INT,
        nome VARCHAR(50),
        codigo INT PRIMARY KEY AUTO_INCREMENT
    );

CREATE TABLE
    servico (
        codigo INT PRIMARY KEY AUTO_INCREMENT,
        valor FLOAT,
        descricao VARCHAR(50),
        datadecadastro TIMESTAMP,
        situacao TINYINT,
        fk_funcionario_codigo INT,
        Foreign Key (fk_funcionario_codigo) REFERENCES funcionario(codigo)
    );

CREATE TABLE
    cliente (
        situacao TINYINT,
        datadecadastro TIMESTAMP,
        telefone VARCHAR(15),
        cpf INT,
        endereco VARCHAR(50),
        nome VARCHAR(50),
        codigo INT PRIMARY KEY AUTO_INCREMENT
    );
CREATE TABLE
    aparelho(
          situacao TINYINT,
          defeito VARCHAR(50),
          codigo INT PRIMARY KEY AUTO_INCREMENT,
           fk_funcionario_codigo INT,
           fk_cliente_codigo INT,
           Foreign Key (fk_cliente_codigo) REFERENCES cliente(codigo), 
           Foreign Key (fk_funcionario_codigo) REFERENCES funcionario(codigo)
 
    );
    CREATE TABLE
    peca(
        codigo INT PRIMARY KEY AUTO_INCREMENT,
        descricao VARCHAR(50),
        valorcusto FLOAT,
        datadecadastro TIMESTAMP,
        situacao TINYINT
    );
   
