 create database academia;
 use academia;
 
 create table administrador (
    id_adm int auto_increment primary key,
    usuario varchar(50),
    senha varchar(50) 
);


 create table aluno(
    id_aluno int auto_increment primary key,
    cpf varchar(14) unique,
    nome varchar(50),
    data_nascimento date,
    email varchar(50) unique,
    telefone varchar(20),
    nivel enum('iniciante', 'intermediario', 'avancado', 'expert'),
    endereco varchar(50),
    sexo enum('masculino', 'feminino', 'outro'),
    senha varchar(255) 
);
CREATE TABLE treino (
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_treino DATE NOT NULL,
    tipo_treino ENUM('musculacao', 'cardio', 'alongamento', 'pilates', 'yoga') NOT NULL,
    duracao INT NOT NULL,
    intensidade ENUM('baixa', 'moderada', 'alta') NOT NULL,
    observacoes TEXT
);

 
CREATE TABLE professores (
    id_professor int auto_increment primary key,
    cpf varchar(14) unique,
    nome varchar(100),
    data_nascimento date,
    email varchar(100) unique, 
    telefone varchar(20),
    especialidade enum('musculacao', 'pilates', 'yoga', 'zumba', 'crossfit'),
    horarios_disponiveis enum('manha', 'tarde', 'noite'),
    sexo enum('masculino', 'feminino', 'outro'),
    senha varchar(255) -- Adicionado o campo de senha
);


 SELECT * FROM professores;
 SELECT * FROM aluno;
 SELECT * FROM administrador;

 

 
insert into aluno (cpf, nome, data_nascimento, email, telefone, nivel, endereco, sexo, senha)
values 
('123.456.789-00', 'João Silva', '2000-01-15', 'joao.silva@email.com', '(11) 91234-5678', 'iniciante', 'Rua Exemplo, 123', 'masculino', 'senha123');

insert into administrador (usuario, senha) values ('admin', '1234567');


insert into professores (cpf, nome, data_nascimento, email, telefone, especialidade, horarios_disponiveis, sexo, senha)
values 
('987.654.321-00', 'Maria Oliveira', '1985-06-20', 'maria.oliveira@email.com', '(11) 98765-4321', 'yoga', 'manha', 'feminino', 'senha123');
