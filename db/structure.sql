drop table if exists visiteur;

create table visiteur (
id integer not null primary key auto_increment,
type varchar(50) not null,
nom varchar(50) not null,
prenom varchar(50) not null,
login varchar(50) not null,
motdepasse varchar(50) not null,
adresse varchar(50) not null,
codepostal varchar(50) not null,
ville varchar(50) not null,
dateEmbauche date,
idSecteur int(11) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;

create table secteur(
id integer not null primary key auto_increment,
nom varchar(50)not null
)