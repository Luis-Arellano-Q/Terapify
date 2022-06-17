CREATE TABLE cita (
    id           INTEGER NOT NULL,
    fecha        DATE NOT NULL,
    precio       FLOAT(5) NOT NULL,
    descripcion  VARCHAR2(80 CHAR) NOT NULL,
    psicologo_id INTEGER NOT NULL
);

ALTER TABLE cita ADD CONSTRAINT cita_pk PRIMARY KEY ( id );

CREATE TABLE cliente (
    id               INTEGER NOT NULL,
    nombre           VARCHAR2(50 CHAR) NOT NULL,
    apellido         VARCHAR2(50 CHAR) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    correo           VARCHAR2(80 CHAR) NOT NULL,
    telefono         INTEGER NOT NULL,
    genero           VARCHAR2(10 CHAR)
);

ALTER TABLE cliente ADD CONSTRAINT cliente_pk PRIMARY KEY ( id );

CREATE TABLE cliente_cita (
    cliente_id INTEGER NOT NULL,
    cita_id    INTEGER NOT NULL
);

ALTER TABLE cliente_cita ADD CONSTRAINT relation_3_pk PRIMARY KEY ( cliente_id,
                                                                    cita_id );

CREATE TABLE detalle_tarjeta (
    id                 INTEGER NOT NULL,
    numero             INTEGER NOT NULL,
    fecha_vencimiento  DATE NOT NULL,
    cvc                CHAR(3 CHAR) NOT NULL,
    metodo_pago_id     INTEGER NOT NULL,
    cliente_id         INTEGER NOT NULL,
    nombre_propietario VARCHAR2(50 CHAR) NOT NULL
);

CREATE UNIQUE INDEX tarjeta__idx ON
    detalle_tarjeta (
        metodo_pago_id
    ASC );

CREATE UNIQUE INDEX tarjeta__idxv1 ON
    detalle_tarjeta (
        cliente_id
    ASC );

ALTER TABLE detalle_tarjeta ADD CONSTRAINT tarjeta_pk PRIMARY KEY ( id );

CREATE TABLE metodo_pago (
    id      INTEGER NOT NULL,
    cita_id INTEGER NOT NULL
);

CREATE UNIQUE INDEX metodo_pago__idx ON
    metodo_pago (
        cita_id
    ASC );

ALTER TABLE metodo_pago ADD CONSTRAINT metodo_pago_pk PRIMARY KEY ( id );

CREATE TABLE psicologo (
    id               INTEGER NOT NULL,
    nombre           VARCHAR2(50 CHAR) NOT NULL,
    apellido         VARCHAR2(50 CHAR) NOT NULL,
    fecha_nacimiento DATE NOT NULL,
    telefono         INTEGER NOT NULL,
    especialidad     VARCHAR2(50 CHAR) NOT NULL,
    correo           VARCHAR2(80 CHAR) NOT NULL,
    genero           VARCHAR2(10 CHAR) NOT NULL,
    cedula           CHAR(15 CHAR) NOT NULL
);

ALTER TABLE psicologo ADD CONSTRAINT psicologo_pk PRIMARY KEY ( id );

ALTER TABLE cita
    ADD CONSTRAINT cita_psicologo_fk FOREIGN KEY ( psicologo_id )
        REFERENCES psicologo ( id );

ALTER TABLE detalle_tarjeta
    ADD CONSTRAINT detalle_tarjeta_cliente_fk FOREIGN KEY ( cliente_id )
        REFERENCES cliente ( id );

ALTER TABLE detalle_tarjeta
    ADD CONSTRAINT detalle_tarjeta_metodo_pago_fk FOREIGN KEY ( metodo_pago_id )
        REFERENCES metodo_pago ( id );

ALTER TABLE metodo_pago
    ADD CONSTRAINT metodo_pago_cita_fk FOREIGN KEY ( cita_id )
        REFERENCES cita ( id );

ALTER TABLE cliente_cita
    ADD CONSTRAINT relation_3_cita_fk FOREIGN KEY ( cita_id )
        REFERENCES cita ( id );

ALTER TABLE cliente_cita
    ADD CONSTRAINT relation_3_cliente_fk FOREIGN KEY ( cliente_id )
        REFERENCES cliente ( id );

--CREACION DE SECUENCIA
CREATE SEQUENCE INCREMENTO START WITH 1 INCREMENT BY 1;

-- TRIGER PARA AUTO INCREMENTO
CREATE OR REPLACE TRIGGER TRG_CLIENTE BEFORE INSERT ON CLIENTE FOR EACH ROW 
BEGIN 
    SELECT INCREMENTO.NEXTVAL INTO :NEW.ID FROM DUAL;
END;



select * from cliente;
DELETE cliente where nombre = 'ANGELO';
DELETE cliente where nombre = 'LUIS';
DELETE cliente where nombre = 'luis';

INSERT INTO "CLIENTE" VALUES (NULL,'luis','Prees',NULL,'lp@gmail.com',94323232,NULL,'lp');

UPDATE "TERAPIFY"."CLIENTE" SET NOMBRE = 'Angelo', FECHA_NACIMIENTO = TO_DATE('2005-04-12 00:00:00', 'YYYY-MM-DD HH24:MI:SS'), 
GENERO = 'hombre', EDAD = '17' WHERE ID = '11';



INSERT INTO "TERAPIFY"."CLIENTE" (ID, NOMBRE, APELLIDO, CORREO, TELEFONO, CLAVE) 
VALUES ('3', 'Juan', 'peres|', 'lp@gmail.com', '912312312', 'lp123')

SELECT correo from cliente where exists(select correo from cliente where correo='luis@gmail.com');


UPDATE CLIENTE SET NOMBRE = 'angelo', APELLIDO = 'qui', FECHA_NACIMIENTO = TO_DATE('09-05-2001', 'DD-MM-YYYY'),  CORREO = 'cmamut@gmail.com', 
TELEFONO = 51942342,  GENERO = 'hombre', EDAD = '21' WHERE ID = '11');