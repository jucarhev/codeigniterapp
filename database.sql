create database ci_database;

use ci_database;

create table estudiantes(
	id int(10) not null auto_increment primary key,
	nombre varchar(100) not null,
	apellidos varchar(100) not null,
	curp varchar(100) not null,
	genero varchar(20),
	direccion varchar(100),
	numerointerno int(10),
	numeroexterno int(10),
	telefonoprincipal int(16),
	telefonosecundario int(16),
	email varchar(100),
	discapacidad varchar(100),
	fechanacimiento date,
	edad int(2),
	rfc varchar(20),
	
	id_colonias int(10),
	id_carrera int(10),
	id_grupo int(10),
	
	foreign key(id_grupo)    references grupo(id)    on delete cascade on update cascade,
	foreign key(id_carrera)  references carrera(id)  on delete cascade on update cascade,
	foreign key(id_colonias) references colonias(id) on delete cascade on update cascade
)engine=innodb;

create table asistencia(
	id int(10) not null auto_increment primary key,
	fecha date,
	asistio int(1),
	
	id_estudiantes int(10),
	id_materias int(10),
	
	foreign key(id_estudiantes) references estudiantes(id) 	on delete cascade on update cascade,
	foreign key(id_materias) 	references materias(id) 	on delete cascade on update cascade
)engine=innodb;

create table carrera(
	id int(10) not null auto_increment primary key,
	nombre varchar(100),
	clave varchar(50)
)engine=innodb;

create table grado(
	id int(10) not null auto_increment primary key,
	nombre varchar(100)
)engine=innodb;

create table grupo(
	id int(10) not null auto_increment primary key,
	nombre varchar(100),
	turno varchar(50),
	id_grado int(10),
	foreign key(id_grado) references grado(id) on delete cascade on update cascade
)engine=innodb;

create table materias(
	id int(10) not null auto_increment primary key,
	nombre varchar(200),
	clave varchar(100)
)engine=innodb;

create table estudiantes_documentacion(
	id int(10) not null auto_increment primary key,
	id_estudiantes  int(10),
	id_documentacion int(10),
	foreign key(id_estudiantes) references estudiantes(id) on delete cascade on update cascade,
	foreign key(id_documentacion) references documentacion(id) on delete cascade on update cascade
)engine=innodb;

create table documentacion(
	id int(10) not null auto_increment primary key,
	nombre varchar(100),
	formato varchar(100),
	estado varchar(100)
)engine=innodb;

--------------------
--------- Direccion
--------------------
create table estados(
	id int(10) not null auto_increment primary key,
	nombre varchar(100) not null
)engine=innodb;

create table municipios(
	id int(10) not null auto_increment primary key,
	nombre varchar(100) not null,
	id_estados int(10) not null,
	foreign key(id_estados) references estados(id) on delete cascade on update cascade
)engine=innodb;

create table localidades(
	id int(10) not null auto_increment primary key,
	nombre varchar(100) not null,
	codigopostal int(10) not null,
	id_municipios int(10) not null,
	foreign key(id_municipios) references municipios(id) on delete cascade on update cascade
)engine=innodb;

create table colonias(
	id int(10) not null auto_increment primary key,
	nombre varchar(100) not null,
	id_localidades int(10) not null,
	foreign key(id_localidades) references localidades(id) on delete cascade on update cascade
)engine=innodb;