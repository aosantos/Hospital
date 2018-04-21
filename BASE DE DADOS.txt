
create database hospital;
use hospital;

create table  paciente(
id integer primary key auto_increment,
nome varchar(255),
nome_mae varchar(255),
nome_pai varchar(255),
email varchar(255),
status boolean,
data datetime);
 


create table endereco(
id integer primary key auto_increment,
paciente_id integer,
rua varchar(255),
nome_bairro varchar(255),
status boolean,
data datetime);
 



ALTER TABLE `hospital`.`endereco` 
  ADD CONSTRAINT `paciente_id`
  FOREIGN KEY (`paciente_id` )
  REFERENCES `hospital`.`paciente` (`id` )
  ON DELETE NO ACTION
  ON UPDATE NO ACTION
, ADD INDEX `paciente_id_idx` (`paciente_id` ASC) ;
