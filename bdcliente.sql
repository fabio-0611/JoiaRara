CREATE DATABASE bdcliente;
USE bdcliente;
CREATE TABLE cliente (
    ID_CLIENTE INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Nome VARCHARACTER(40) NOT NULL,
    Sexo enum('M','F'),
    Email VARCHARACTER(100),
	Telefone VARCHARACTER(20),
    Cpf varcharacter(15) NOT NULL,
    Nascimento date
)default charset = utf8;

create table Localidade(
 Id_Logadouro int primary key auto_increment not null,
 Endereco varchar(100) not null,
 Numero float(10) not null,
Cidade varchar(20) not null,
Estado varchar(10) not null,
FK_CLIENTE INT NOT NULL,
FOREIGN KEY (FK_CLIENTE) REFERENCES CLIENTE (ID_CLIENTE)
);
 
select * from Localidade;

