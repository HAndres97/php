/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  hchri
 * Created: 7 mar 2024
 */
# 1. DISEÑAR Y CREAR LA BASE DE DATOS DE UN CONCESIONARIO.

CREATE DATABASE IF NOT EXISTS concesionario;

USE concesionario;

CREATE TABLE coches(
    id  int(10) auto_increment not null,
    modelo varchar(100) not null,
    marca   varchar(50) not null,
    precio  int(20) not null,
    stock   int(255) not null,
CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id int(10) auto_increment not null,
    nombre varchar(100) not null,
    ciudad  varchar(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=INNODB;

CREATE TABLE vendedores(
    id  int(10) auto_increment not null,
    grupo_id int(10) not null,
    jefe int(10),
    nombre  varchar(100) not null,
    apellidos varchar(150),
    cargo varchar(150),
    fecha date,
    sueldo float(20,2) null,
    comision float(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_feje FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=INNODB;

CREATE TABLE clientes(
    id int(10) auto_increment not null,
    vendedor_id int(10),
    nombre varchar(100) not null,
    ciudad varchar(150),
    gastado float(50,2),
    fecha date,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=INNODB;
CREATE TABLE encargos(
    id int(10) auto_increment not null,
    cliente_id int(10) not null,
    coche_id int(10) not null,
    cantidad int(100),
    fecha date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=INNODB;

# RELLENAR LA BASE DE DATOS CON INFORMACIÓN
# COCHES
INSERT INTO coches VALUES(NULL,'Renault Clio','Reanult',12000,13);
INSERT INTO coches VALUES(NULL,'Seat Panda','Seat',10000,10);
INSERT INTO coches VALUES(NULL,'Mercedes Ranchera','Mercedes Benz',32000,24);
INSERT INTO coches VALUES(NULL,'Porche Cayene','Porche',65000,5);
INSERT INTO coches VALUES(NULL,'Lambo Aventador','Lamborguini',17000,2);
INSERT INTO coches VALUES(NULL,'Ferrari Spider','Ferrari',245000,80);

# GRUPOS
INSERT INTO grupos VALUES(NULL,'Vendedores A','Madrid');
INSERT INTO grupos VALUES(NULL,'Vendedores B','Madrid');
INSERT INTO grupos VALUES(NULL,'Directores Mecanicos','Madrid');
INSERT INTO grupos VALUES(NULL,'Vendedores A','Barcelona');
INSERT INTO grupos VALUES(NULL,'Vendedores B','Barcelona');
INSERT INTO grupos VALUES(NULL,'Vendedores C','Valencia');
INSERT INTO grupos VALUES(NULL,'Vendedores A','Bilbao');
INSERT INTO grupos VALUES(NULL,'Vendedores A','Pamplona');
INSERT INTO grupos VALUES(NULL,'Vendedores C','Santiago de Compostela');
# VENDEDORES
INSERT INTO vendedores VALUES(NULL,1,NULL,'David','Lopez','Responsable de tienda',CURDATE(),30000,4);

INSERT INTO vendedores VALUES(NULL,1,1,'Fran','Martinez','Ayudante de tienda',CURDATE(),23000,2);
INSERT INTO vendedores VALUES(NULL,2,NULL,'Nelson','Sanchez','Responsable de tienda',CURDATE(),38000,5);
INSERT INTO vendedores VALUES(NULL,1,3,'Jesus','Lopez','Ayudante de tienda',CURDATE(),12000,6);
INSERT INTO vendedores VALUES(NULL,1,NULL,'Victor','Lopez','Mecanico Jefe',CURDATE(),50000,2);
INSERT INTO vendedores VALUES(NULL,1,NULL,'Antonio','Lopez','_Vendedore de Recambios',CURDATE(),13000,8);
INSERT INTO vendedores VALUES(NULL,1,NULL,'Salvador','Lopez','Vendedor Experto',CURDATE(),60000,2);
INSERT INTO vendedores VALUES(NULL,1,NULL,'Joaquin','Lopez','Ejecutivo de Cuentas',CURDATE(),80000,1);
INSERT INTO vendedores VALUES(NULL,1,NULL,'Luis','Lopez','Ayudante en tienda',CURDATE(),10000,10);


# CLIENTES
# ENCARGOS
