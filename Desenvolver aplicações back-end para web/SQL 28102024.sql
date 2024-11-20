CREATE DATABASE BD;
USE BD;

CREATE TABLE aluno(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    matricula int unique,
    data_nascimento DATE,
    curso VARCHAR(100)
);

select * from aluno;
DROP database BD