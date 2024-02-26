# 1° Criar o banco de dados
create database if not exists parking_esteio_morning;
# 2° Usar/selecionar o banco
use parking_esteio_morning;
# 3° Criar as estruturas (tabelas)
create table if not exists clients(
	cpf char(14) primary key,
    fullname varchar(45) not null,
    phone char(15) not null,
    status tinyint unsigned not null
);

create table if not exists parking_lot(
	number int unsigned primary key,
    situation varchar(10) not null,
    status tinyint unsigned not null
);

create table if not exists transactions(
	id int unsigned primary key auto_increment,
    licence_plate char(8) not null,
    vehicle_brand varchar(20) not null,
    vehicle_model varchar(20) not null,
    vehicle_color varchar(10) not null,
    entry_time time not null,
    departure_time time,
    amount_paid decimal(5,2),
    client char(14) not null,
    parking_lot_number int null,
    status tinyint not null
);