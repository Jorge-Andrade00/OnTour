CREATE TABLE USUARIO
(
	id_usuario INT NOT NULL AUTO_INCREMENT,
	nombre_usuario varchar(50) not null,
	correo_ususario varchar(200) not null,
	pass_usuario varchar(255) not null,
	fecha_registro datetime not null,
	activo tinyint not null,
	primary key(id_usuario)
);
