 create database academia;
 use academia;
 
 create table aluno(
 id_aluno int auto_increment primary key,
	cpf varchar (14) unique,
    nome varchar (50),
    data_nascimento date,
	email varchar(50)unique,
	telefone varchar(20),
	nivel enum('iniciante', 'intermediario', 'avancado', 'expert'),
	endereco varchar (50),
    sexo enum('masculino', 'feminino', 'outro')
 );
 
 CREATE TABLE professores (
    id_professor int auto_increment primary key,
    cpf varchar(14) unique,
    nome varchar(100),
    data_nascimento date,
    email varchar(100)unique, 
    telefone varchar(20),
    especialidade enum('musculacao', 'pilates', 'yoga', 'zumba', 'crossfit'),
    horarios_disponiveis enum('manha', 'tarde', 'noite'),
    sexo enum('masculino', 'feminino', 'outro')
);

 SELECT * FROM professores;
 SELECT * FROM aluno;
 
 drop table aluno;
 
