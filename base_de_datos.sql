drop database if exists analisisuno;
create database if not exists analisisuno;
use analisisuno;

create table usuarios(
iduser INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR (100) NOT NULL,
contrasenia VARCHAR (100) NOT NULL
)Engine InnoDB default charset=latin1;


create table productos(
idprod INT PRIMARY KEY AUTO_INCREMENT,
nomprod VARCHAR (100) NOT NULL,
precio DECIMAL (10,2) NOT NULL
)Engine InnoDB default charset=latin1;