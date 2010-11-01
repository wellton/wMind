/*######################################################
  #   Generated by Mind 00:09 10/27/2010               #
  #   Generate PostgreSQL DataBase Commands         #
  ######################################################*/


	/* DDL: table project */
CREATE TABLE project
(
	pk_project integer unique not null,
	name varchar(255) not null ,
	info text  ,
	creator int4  ,
	dt_creation timestamp,
	PRIMARY KEY(pk_project)
);


	/* DDL: table user */
CREATE TABLE user
(
	pk_user integer unique not null,
	name varchar(255)  ,
	login varchar(40) not null ,
	pwd varchar(40) not null ,
	status char(1)  ,
	type char(1)  ,
	PRIMARY KEY(pk_user)
);


	/* DDL: table project_user */
CREATE TABLE project_user
(
	pk_project_user integer unique not null,
	fk_project integer  ,
	fk_user integer  ,
	PRIMARY KEY(pk_project_user),
	FOREIGN KEY(fk_user) REFERENCES user(pk_user),
	FOREIGN KEY(fk_project) REFERENCES project(pk_project)
);


	/* DDL: table version */
CREATE TABLE version
(
	pk_version integer unique not null,
	version varchar(9) not null ,
	tag varchar(60)  ,
	obs text  ,
	originalcode text  ,
	machine_lang varchar(16)  ,
	framework varchar(60)  ,
	database varchar(16)  ,
	fk_project integer  ,
	fk_user integer  ,
	PRIMARY KEY(pk_version),
	FOREIGN KEY (fk_user) REFERENCES user(pk_user),
	FOREIGN KEY (fk_project) REFERENCES project(pk_project)
);


	/* DDL: table object */
CREATE TABLE object
(
	pk_object integer unique not null,
	type char(1)  ,
	name varchar(256)  ,
	version int4  ,
	locked int4  default 0,
	info varchar(2048)  ,
	fk_version integer  ,
	PRIMARY KEY(pk_object),
	FOREIGN KEY (fk_version) REFERENCES version(pk_version)
);


	/* DDL: table component */
CREATE TABLE component
(
	pk_component integer unique not null,
	type char(1)  ,
	fk_object integer  ,
	PRIMARY KEY(pk_component),
	FOREIGN KEY (fk_object) REFERENCES object(pk_object)
);


	/* DDL: table property */
CREATE TABLE property
(
	pk_property integer unique not null,
	name varchar(255) not null ,
	value text  ,
	comment varchar(255)  ,
	fk_component integer  ,
	PRIMARY KEY(pk_property),
	FOREIGN KEY (fk_component) REFERENCES component(pk_component)
);


	/* DDL: table property_pointer */
CREATE TABLE property_pointer
(
	pk_property_pointer integer unique not null,
	main_property integer not null ,
	fk_property integer  ,
	PRIMARY KEY(pk_property_pointer),
	FOREIGN KEY (fk_property) REFERENCES property(pk_property)
);
