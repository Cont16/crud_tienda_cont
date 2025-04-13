CREATE TABLE clientes (
    cli_id SERIAL PRIMARY KEY,
    cli_nombres VARCHAR(250) NOT NULL,
    cli_apellidos VARCHAR (250) NOT NULL,
    cli_telefono INT NOT NULL,
    cli_nit INT NOT NULL,
    cli_situacion SMALLINT DEFAULT 1
);

Create table productos (
producto_id serial primary key,
producto_nombre varchar (60) not null,
producto_precio decimal (8,2) not null,
producto_situacion char (1) DEFAULT '1'
);
