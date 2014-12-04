drop table if exists Especie;

/*==============================================================*/
/* Table: Especie                                               */
/*==============================================================*/
create table Especie
(
   id_especie           int not null auto_increment,
   nombre_especie       varchar(1024) not null,
   primary key (id_especie)
);

drop table if exists Raza;

/*==============================================================*/
/* Table: Raza                                                  */
/*==============================================================*/
create table Raza
(
   id_raza              int not null auto_increment,
   id_especie           int not null,
   nombre_raza          varchar(1024) not null,
   primary key (id_raza)
);

alter table Raza add constraint FK_tiene_raza foreign key (id_especie)
      references Especie (id_especie) on delete restrict on update restrict;



drop table if exists Animal;

/*==============================================================*/
/* Table: Animal                                                */
/*==============================================================*/
create table Animal
(
   id_animal            int not null auto_increment,
   id_especie           int not null,
   RUT                  varchar(12) not null,
   numero_chip          int not null,
   nombre_animal        varchar(20) not null,
   edad_animal          int default NULL,
   genero_animal        varchar(1024) not null,
   peso                 float default NULL,
   vacunas              text default NULL,
   desparasitado        text default NULL,
   estirilizado         text default NULL,
   observaciones        text,
   foto_animal          varchar(1024),
   fecha_adopcion       date not null,
   primary key (id_animal)
);

alter table Animal add constraint FK_adopta foreign key (RUT)
      references Persona (RUT) on delete restrict on update restrict;

alter table Animal add constraint FK_es_de foreign key (id_especie)
      references Especie (id_especie) on delete restrict on update restrict;
