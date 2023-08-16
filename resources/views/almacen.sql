CREATE TABLE categoria_producto (
    id serial NOT NULL,
    nombre varchar (30) NOT NULL,

    PRIMARY KEY (id));

CREATE TABLE tienda (
    id serial NOT NULL,
    nombre varchar (30) NOT NULL,

    PRIMARY KEY (id));

CREATE TABLE proveedor (
    id serial NOT NULL,
    nombre varchar (30) NOT NULL,
    direccion varchar (70) NOT NULL,

    PRIMARY KEY (id));

CREATE TABLE producto (
    cod bigint PRIMARY KEY,
    nombre varchar (200) NOT NULL,
    id_proveedor integer,
    id_categoria integer,
    stock double precision,

    FOREIGN KEY (id_proveedor) REFERENCES proveedor (id) ON UPDATE CASCADE ON DELETE CASCADE,
    FOREIGN KEY (id_categoria) REFERENCES categoria_producto (id) ON UPDATE CASCADE ON DELETE CASCADE);	




DROP TABLE producto;
DROP TABLE proveedor;
DROP TABLE tienda;
DROP TABLE categoria_producto;