create table conferencista (
nombre varchar(50) NOT NULL, 
apellido varchar(50) NOT NULL,
profesion varchar(50) NOT NULL,
biografia varchar(50) NOT NULL, 
correo varchar(50) ); 

create table usuarioC (
fecha int NOT NULL, 
correo varchar(50) NOT NULL, 
password varchar(50) NOT NULL
); 

create table registroC (
nombre varchar(50) NOT NULL, 
apellido varchar(50) NOT NULL,   
correo varchar(50) NOT NULL); 

create table conferencia (
nombre varchar(50) NOT NULL,    
correo varchar(50) NOT NULL); 