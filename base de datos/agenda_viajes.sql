-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2020-05-23 17:46:57.234

-- tables
-- Table: hotel
CREATE TABLE hotel (
    id_hotel int  NOT NULL,
    calle varchar(30)  NOT NULL,
    numero int  NOT NULL,
    nombre varchar(30)  NOT NULL,
    estrellas int  NOT NULL,
    nro_habitacion int  NOT NULL,
    fecha_alta date  NOT NULL,
    fecha_baja date  NOT NULL,
    horario_checkin time  NOT NULL,
    horario_checkout time  NOT NULL,
    CONSTRAINT hotel_pk PRIMARY KEY (id_hotel)
);

-- Table: plan
CREATE TABLE plan (
    id_plan int  NOT NULL,
    nombre varchar(30)  NOT NULL,
    descripcion varchar(30)  NOT NULL,
    CONSTRAINT plan_pk PRIMARY KEY (id_plan)
);

-- Table: usuario
CREATE TABLE usuario (
    nombre varchar(30)  NOT NULL,
    apellido varchar(30)  NOT NULL,
    nombre_usuario varchar(30)  NOT NULL,
    email varchar(30)  NOT NULL,
    contraseña varchar(50)  NOT NULL,
    premium boolean  NOT NULL,
    nro_tarjeta int  NULL,
    ccv int  NULL,
    CONSTRAINT usuario_pk PRIMARY KEY (nombre_usuario,email)
);

-- Table: viaje
CREATE TABLE viaje (
    id_viaje int  NOT NULL,
    id_hotel int  NULL,
    id_vuelo int  NULL,
    nombre_usuario varchar(30)  NOT NULL,
    email varchar(30)  NOT NULL,
    id_plan int  NULL,
    CONSTRAINT viaje_pk PRIMARY KEY (id_viaje)
);

-- Table: vuelo
CREATE TABLE vuelo (
    id_vuelo int  NOT NULL,
    fecha_inicio date  NOT NULL,
    fecha_fin date  NOT NULL,
    descripcion varchar(30)  NOT NULL,
    ciudad_origen varchar(30)  NOT NULL,
    ciudad_destino varchar(30)  NOT NULL,
    horario_despegue time  NOT NULL,
    horario_llegada time  NOT NULL,
    aerolinea varchar(30)  NOT NULL,
    nro_asiento int  NOT NULL,
    escala int  NOT NULL,
    CONSTRAINT vuelo_pk PRIMARY KEY (id_vuelo)
);

-- foreign keys
-- Reference: viaje_hotel (table: viaje)
ALTER TABLE viaje ADD CONSTRAINT viaje_hotel
    FOREIGN KEY (id_hotel)
    REFERENCES hotel (id_hotel)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: viaje_plan (table: viaje)
ALTER TABLE viaje ADD CONSTRAINT viaje_plan
    FOREIGN KEY (id_plan)
    REFERENCES plan (id_plan)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: viaje_usuario (table: viaje)
ALTER TABLE viaje ADD CONSTRAINT viaje_usuario
    FOREIGN KEY (nombre_usuario, email)
    REFERENCES usuario (nombre_usuario, email)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: viaje_vuelo (table: viaje)
ALTER TABLE viaje ADD CONSTRAINT viaje_vuelo
    FOREIGN KEY (id_vuelo)
    REFERENCES vuelo (id_vuelo)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

