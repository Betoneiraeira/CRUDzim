create database escola;
use escola;

create table alunos(
	matricula int primary key auto_increment,
    nome varchar(100),
    email varchar(100),
    idade int not null
)auto_increment=10000;

select * from alunos;