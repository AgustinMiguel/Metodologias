-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2020-06-13 18:51:28.457

-- tables
-- Table: Hotel
CREATE TABLE Hotel (
    id_viaje int  NOT NULL,
    id_plan int  NOT NULL,
    id_hotel int  NOT NULL,
    calle varchar(30)  NOT NULL,
    nro int  NOT NULL,
    estrellas int  NOT NULL,
    nro_habitacion int  NOT NULL,
    fecha_baja date  NOT NULL,
    horario_checking time  NOT NULL,
    horario_checkout time  NOT NULL,
    CONSTRAINT PK_Hotel PRIMARY KEY (id_viaje,id_plan,id_hotel)
);

-- Table: Pasajero
CREATE TABLE Pasajero (
    id_viaje int  NOT NULL,
    id_pasajero int  NOT NULL,
    nombre varchar(50)  NOT NULL,
    apellido  varchar(50)  NOT NULL,
    dni int  NOT NULL,
    CONSTRAINT Pasajero_pk PRIMARY KEY (id_viaje,id_pasajero)
);

-- Table: Plan
CREATE TABLE Plan (
    id_viaje int  NOT NULL,
    id_plan int  NOT NULL,
    descripcion varchar(50)  NOT NULL,
    tipo char(1)  NULL,
    fecha date  NOT NULL,
    CONSTRAINT PK_Plan PRIMARY KEY (id_viaje,id_plan)
);

-- Table: Usuario
CREATE TABLE Usuario (
    id_usuario int  NOT NULL,
    nombre varchar(30)  NOT NULL,
    apellido varchar(30)  NOT NULL,
    premium boolean  NOT NULL,
    email varchar(30)  NOT NULL,
    password int  NOT NULL,
    ccv int  NULL,
    CONSTRAINT PK_Usuario PRIMARY KEY (id_usuario)
);

-- Table: Viaje
CREATE TABLE Viaje (
    id_viaje int  NOT NULL,
    nro_usuario int  NOT NULL,
    email varchar(30)  NOT NULL,
    id_usuario int  NOT NULL,
    nro_personas int  NOT NULL,
    objetivo varchar(300)  NOT NULL,
    detalles_imp varchar(300)  NOT NULL,
    CONSTRAINT PK_Viaje PRIMARY KEY (id_viaje)
);

-- Table: Vuelo
CREATE TABLE Vuelo (
    id_viaje int  NOT NULL,
    id_plan int  NOT NULL,
    id_vuelo int  NOT NULL,
    ciudad_origen varchar(30)  NOT NULL,
    ciudad_destino varchar(30)  NOT NULL,
    horario_desp time  NOT NULL,
    horario_aterr time  NOT NULL,
    aerolinea varchar(30)  NOT NULL,
    nro_asiento int  NOT NULL,
    escalas int  NULL,
    CONSTRAINT PK_Vuelo PRIMARY KEY (id_viaje,id_plan,id_vuelo)
);

-- foreign keys
-- Reference: FK_Hotel_Plan (table: Hotel)
ALTER TABLE Hotel ADD CONSTRAINT FK_Hotel_Plan
    FOREIGN KEY (id_viaje, id_plan)
    REFERENCES Plan (id_viaje, id_plan)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: FK_Plan_Viaje (table: Plan)
ALTER TABLE Plan ADD CONSTRAINT FK_Plan_Viaje
    FOREIGN KEY (id_viaje)
    REFERENCES Viaje (id_viaje)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: FK_Viaje_Usuario (table: Viaje)
ALTER TABLE Viaje ADD CONSTRAINT FK_Viaje_Usuario
    FOREIGN KEY (id_usuario)
    REFERENCES Usuario (id_usuario)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: FK_Vuelo_Plan (table: Vuelo)
ALTER TABLE Vuelo ADD CONSTRAINT FK_Vuelo_Plan
    FOREIGN KEY (id_viaje, id_plan)
    REFERENCES Plan (id_viaje, id_plan)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- Reference: Persona_Viaje (table: Pasajero)
ALTER TABLE Pasajero ADD CONSTRAINT Persona_Viaje
    FOREIGN KEY (id_viaje)
    REFERENCES Viaje (id_viaje)  
    NOT DEFERRABLE 
    INITIALLY IMMEDIATE
;

-- End of file.

