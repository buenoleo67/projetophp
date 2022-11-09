/* Lógico_1: */

CREATE TABLE
    funcionario (
        situacao TINYINT,
        telefone VARCHAR(15),
        funcao VARCHAR(50),
        cpf INT,
        nome VARCHAR(50),
        codigo INT PRIMARY KEY AUTO_INCREMMENT
    );

CREATE TABLE
    servico (
        codigo INT PRIMARY KEY AUTO_INCREMENT,
        valor FLOAT,
        descricao VARCHAR(50),
        datadecadastro TIMESTAMP,
        situacao TINYINT,
        fk_funcionario_codigo INT
    );

CREATE TABLE
    peca (
        descricao VARCHAR(50),
        codigo INT PRIMARY KEY AUTO_INCREMENT,
        valorcusto FLOAT,
        datadecadastro TIMESTAMP,
        situacao TINYINT
    );

CREATE TABLE
    aparelho (
        situacao TINYINT,
        observacao VARCHAR(50),
        defeito VARCHAR(50),
        marca VARCHAR(20),
        modelo VARCHAR(20),
        codigo INT PRIMARY KEY AUTO_INCREMENT,
        fk_cliente_codigo INT,
        fk_funcionario_codigo INT
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
    Relacionamento_4 (
        fk_peca_codigo INT,
        fk_servico_codigo INT
    );

ALTER TABLE servico
ADD
    CONSTRAINT FK_servico_2 FOREIGN KEY (fk_funcionario_codigo) REFERENCES funcionario (codigo) ON DELETE
SET NULL;

ALTER TABLE aparelho
ADD
    CONSTRAINT FK_aparelho_2 FOREIGN KEY (fk_cliente_codigo) REFERENCES cliente (codigo) ON DELETE CASCADE;

ALTER TABLE aparelho
ADD
    CONSTRAINT FK_aparelho_3 FOREIGN KEY (fk_funcionario_codigo) REFERENCES funcionario (codigo) ON DELETE
SET NULL;

ALTER TABLE Relacionamento_4
ADD
    CONSTRAINT FK_Relacionamento_4_1 FOREIGN KEY (fk_peca_codigo) REFERENCES peca (codigo) ON DELETE
SET NULL;

ALTER TABLE Relacionamento_4
ADD
    CONSTRAINT FK_Relacionamento_4_2 FOREIGN KEY (fk_servico_codigo) REFERENCES servico (codigo) ON DELETE
SET NULL;

INSERT INTO
    cliente (
        nome,
        telefone,
        cpf,
        aparelho
    )
VALUES (
        'asdodsadasd',
        '341414',
        '13434324325',
        'celular'
    )
