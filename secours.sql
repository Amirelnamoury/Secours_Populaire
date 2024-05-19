drop database if exists secours ; 
create database secours; 
use secours; 

create table membre (
	idmembre int(3) not null auto_increment, 
	nom varchar(50),
	prenom varchar(50),
	adresse varchar(50),
	tel varchar(20),
	email varchar(100), 
	mdp varchar(255), 
	primary key(idmembre)
);

create table projet (
	idprojet int(3) not null auto_increment, 
	description varchar(150),
	datelancement date,
	pays varchar(50),
	ville varchar(50),
	budget float,  
	sommecollectee float, 
	primary key(idprojet)
);

create table don (
	iddon int(3) not null auto_increment, 
	datedon date,
	somme float,  
	appreciation varchar(255),
	idprojet int(3) not null, 
	idmembre int(3) not null,
	primary key(iddon), 
	foreign key(idprojet) references projet(idprojet), 
	foreign key(idmembre) references membre(idmembre)
);

create table commentaire (
	idcomment int(3) not null auto_increment, 
	datecomment date,
	contenu text, 
	note int(2), 
	idprojet int(3) not null,
	idmembre int(3) not null,
	primary key(idcomment), 
	foreign key(idprojet) references projet(idprojet), 
	foreign key(idmembre) references membre(idmembre)
);
create table user(
    iduser int(3) NOT NULL auto_increment,
    nom varchar(20),
    prenom varchar(20),
    email varchar(100),
    mdp varchar(255),
    droits enum ("admin", "user"),
    primary key (iduser)
    );

insert into membre values (null,"elnamoury","amir","34 rue charcot","0749734318","elnamouryamir135@hotmail.com","456"),(null,"fares","bergha","36 rue europe","0622887889","fares@gmail.com","123");
insert into projet values (null,"Approfondissement du puit des habitants du village de bouizzakarne","2020-10-12","Maroc","bouizzakarne","14990","11200");

insert into don values (null,"2020-10-18","200","continuez ainsi","1","1");

insert into commentaire values (null,"2020-10-12","Je suis de tout coeur avec vous sur ce projet nous nous rendons pas compte de la chance que nous avons hamdulilah
	, ","10","1","1");
insert into user values (null,"bergha","fares","fares@gmail.com","123","admin"),
	(null,"elnamoury","amir","elnamouryamir135@hotmail.com","456","user");
	
	