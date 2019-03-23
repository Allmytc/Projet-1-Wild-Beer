CREATE TABLE categorie(
id int auto_increment not null primary key,
name varchar(50) not null,
path varchar(50) not null,
description varchar(255) not null,
unitPrice varchar(10) not null,
taste varchar(10) not null,
thirsty varchar(10) not null,
bitterness varchar(10) not null,
alcohol varchar(10) not null,
fermentation varchar(10) not null,
sixPackPrice varchar(10) not null,
kegPrice varchar(10) not null,
country varchar(30) not null,
cat varchar(30) not null
)ENGINE= InnoDB;