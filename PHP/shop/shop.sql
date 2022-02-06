drop database if exists shop;

create database shop;

use shop;

drop table if exists product;
create table product(
    id int auto_increment not null primary key,
    nam VARCHAR(255) not null,
    descr VARCHAR(255) not null,
    pvp DECIMAL(10,2) not null,
    img LONGBLOB not null
);

drop table if exists cart ;
create table cart(
    id int not null auto_increment primary key
);

drop table if exists prodCarro;
create table prodCarro(
    idProd int not null,
    idCart int not null,
    q int not null,
    primary key(idProd,idCart),
    foreign key (idProd) references product(id),
    foreign key (idCart) references cart(id)
);