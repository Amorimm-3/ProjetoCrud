create database dbteste;
use dbteste;

create table tbteste(
codi_t int auto_increment primary key,
nome_t varchar(40) not null,
email_t varchar(40) not null,
senha_t varchar(8) not null,
sexo_t varchar(1),
dtna_t date
);

select * from tbteste