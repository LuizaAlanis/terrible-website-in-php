Drop database if exists db_balmy;

-- Banco de dados

Create database db_balmy
default character set utf8
default collate utf8_general_ci;
use db_balmy;

-- Usuário de banco

create user 'balmy'@'localhost' identified with mysql_native_password by '123456';
grant all privileges on db_balmy.* to 'balmy'@'localhost';

-- Tabelas

create table usuario(
	id int primary key auto_increment,
    nome varchar(30) not null,
    email varchar(80) not null,
    senha varchar(20) not null,
    adm boolean
);

create table perguntas(
	id int primary key auto_increment,
    autor varchar(20),
    email varchar(80),
    pergunta longtext not null,
    resposta longtext
);

create table categoria(
	id int primary key auto_increment,
    nome varchar(30) not null
);

create table artigo(
	id int primary key auto_increment,
    titulo varchar(30) not null,
    idCategoria int not null,
    sinopse longtext not null,
	texto longtext not null,
    palavrasChave varchar(50) not null, 
    dataDoArtigo date not null, 
    autor varchar(20) not null,
    constraint fk_categoria foreign key (idCategoria) references categoria(id)
);

-- Alterações

alter table artigo add column capa varchar(200) not null;
alter table perguntas add column valida enum ('S','N') not null;

-- Usuario com poder administrativo

insert into usuario(id, nome, email, senha, adm)
values(default, 'Luiza Alanis', 'luiza@gmail.com', 'luiza123456', true);

-- Usuario sem poder administrativo

insert into usuario(id, nome, email, senha, adm)
values(default, 'Usuario', 'usuario@gmail.com', 'usuario123456', false);


-- Alguns selects

select * from artigo;
select * from categoria;
select * from perguntas;
select * from perguntas where valida = 'S';
select * from usuario;
select * from usuario where adm = true;

-- Inserts

insert into categoria(id, nome)
values(default, 'Front-end'),
	(default, 'Back-end'),
	(default, 'Mobile');

insert into perguntas(id, autor, email, pergunta, resposta, valida)
values(default, 'Usuario1', 'usuario1@gmail.com', 'Lorem ipsum dolor sit amet?', 'tempor incididunt ut labore et dolore magna aliqua.','N'),
(default, 'Usuario2', 'usuario2@gmail.com', 'Risus tempor incididunt nullam eget?', 'Euismod in pellentesque.', 'S'),
(default, 'Usuario3', 'usuario3@gmail.com', 'Risus labore nullam eget?', 'Euismod in pellentesque.', 'S'),
(default, 'Usuario4', 'usuario4@gmail.com', 'Risus nullam eget?', 'Euismod in pellentesque.', 'S');



