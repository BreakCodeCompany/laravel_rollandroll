	CREATE TABLE usuario(
	  	id integer,
	  	nombre varchar(20),
	  	apellido varchar(20),
	  	usuario varchar(15),
	  	
	PRIMARY KEY (usuario);

	CREATE TABLE sesion(
	  	usuario varchar(15) NOT NULL,
	  	password varchar(20) NOT NULL,
	  	nivel_acceso integer NOT NULL,

	  	PRIMARY KEY (usuario, password, nivel_acceso),
	  	FOREIGN KEY (usuario) REFERENCES usuario (usuario) ON UPDATE CASCADE ON DELETE CASCADE );

	CREATE TABLE categorias (
		id integer,
		nombre varchar (20) NOT NULL,

		PRIMARY KEY (id));

	CREATE TABLE sub_categorias (

		id integer,
		nombre varchar(30) NOT NULL,
		id_categoria integer,

		PRIMARY KEY (id),
		FOREIGN KEY (id_categoria) REFERENCES categorias (id) ON UPDATE CASCADE ON DELETE CASCADE);


	CREATE TABLE unidad_medida (

		id integer,
		nombre varchar(20),

		PRIMARY KEY (id));

	CREATE TABLE articulo (
		id integer,
		nombre varchar (200) NOT NULL,
		id_unidad_medida integer,
		id_categoria integer,
		id_subCategoria integer,
		stock_ideal double precision,
		stock double precision,
		stock_aux double precision,

		PRIMARY KEY (id),
		FOREIGN KEY (id_subCategoria) REFERENCES sub_categorias (id) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (id_categoria) REFERENCES categorias (id) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (id_unidad_medida) REFERENCES unidad_medida (id) ON UPDATE CASCADE ON DELETE CASCADE);	

	CREATE TABLE tienda (
		id integer,
		nombre varchar(20) NOT NULL,

		PRIMARY KEY (id));

	CREATE TABLE entrada_articulos (

		id_entrada integer ,
		id_articulo integer,
		cantidad double precision,
		precio_unitario double precision,
		fecha_entrada date, 
		cantidadAux double precision,

		PRIMARY KEY (id_entrada),
		FOREIGN KEY (id_articulo) REFERENCES articulo (id) ON UPDATE CASCADE ON DELETE CASCADE);

	CREATE TABLE entrada_articulos_ESPEJO (

		id_entrada integer,
		id_articulo integer,
		cantidad double precision,
		precio_unitario double precision,
		fecha_entrada date, 
		cantidadAux double precision,

		PRIMARY KEY (id_entrada),
		FOREIGN KEY (id_articulo) REFERENCES articulo (id) ON UPDATE CASCADE ON DELETE CASCADE);

	CREATE TABLE salida_articulo (

		id_salida integer,
		id_articulo integer,
		cantidad double precision,
		fecha_salida date, 
		id_tienda integer,
		importe_parcial double precision, 
		cod_entrada integer,
		nro_peticion integer,


		PRIMARY KEY (id_salida, id_articulo),
		FOREIGN KEY (cod_entrada) REFERENCES entrada_articulos (id_entrada) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (id_tienda) REFERENCES tienda (id) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (id_articulo) REFERENCES articulo (id) ON UPDATE CASCADE ON DELETE CASCADE);

	CREATE TABLE salida_articulo_ESPEJO (

		id_salida integer,
		id_articulo integer,
		cantidad double precision,
		fecha_salida date, 
		id_tienda integer,
		importe_parcial double precision, 
		cod_entrada integer,
		nro_peticion integer,


		PRIMARY KEY (id_salida, id_articulo),
		FOREIGN KEY (cod_entrada) REFERENCES entrada_articulos (id_entrada) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (id_tienda) REFERENCES tienda (id) ON UPDATE CASCADE ON DELETE CASCADE,
		FOREIGN KEY (id_articulo) REFERENCES articulo (id) ON UPDATE CASCADE ON DELETE CASCADE);




