--Tabla mascota almacenara las mascotas perdidas y encontradas por los usuarios
CREATE TABLE MASCOTA(
       ID_MASCOTA NUMBER(8)
              CONSTRAINT ID_MASCOTA_NN NOT NULL,
       TIPO number(8)
              CONSTRAINT MASCOTA_TIPO_NN NOT NULL,
       NOMBRE VARCHAR2(35)
              CONSTRAINT NOMBREMASCOTA_NN NOT NULL,
       TIPO_Y_RAZA NUMBER(8)
              CONSTRAINT RAZA_NN NOT NULL
              CONSTRAINT RAZA_UK UNIQUE,
       TAMANO VARCHAR2(30)
       		  CONSTRAINT TAMAÑO_NN NOT NULL,
       CHIP_IDENTIFICACION VARCHAR2(35),
       COLOR VARCHAR2(25),
       ESTADO VARCHAR2(30) --EJM PERDIDO, ENCONTRADO, ADOPTADO, EN CASA CUNA
              CONSTRAINT ESTADO_NN NOT NULL,
       RECOMPENSA NUMBER(12),
       DESCRIPCION VARCHAR2(250),
       FECHA_INGRESO DATE DEFAULT SYSDATE,
       USUARIO_REGISTRA NUMBER(8),
       
       CONSTRAINT PK_MASCOTA
       primary key (ID_MASCOTA)
       using index
       tablespace ad_ind pctfree 20
       storage (initial 10k next 10k pctincrease 0)
)
TABLESPACE ad_data
STORAGE (INITIAL 6144
        NEXT 6144
        MINEXTENTS 1
        MAXEXTENTS 5
); 
-- comentarios mascota
COMMENT ON TABLE MASCOTA IS 'Tabla para el alacenamiento de mascotas tanto perdidas como encontradas';
comment on column MASCOTA.ID_MASCOTA is 'llave primaria de la tabla mascota';
comment on column MASCOTA.NOMBRE is 'Nombre de la mascota';
comment on column MASCOTA.TIPO_Y_RAZA is 'raza de la mascota';
comment on column MASCOTA.CHIP_IDENTIFICACION is 'posible identificacion de la mascota';
comment on column MASCOTA.COLOR is 'color de la mascota o posible mescla de colores de la misma';
comment on column MASCOTA.ESTADO is 'campo q contrendra la llave al valor del estado de la mascota por ejm perdida';
comment on column MASCOTA.RECOMPENSA is 'indicador de una posible recompenza por encontrar la mascota';
comment on column MASCOTA.DESCRIPCION is 'comentarios sobre la mascota perdida o encontrada';
comment on column MASCOTA.USUARIO_REGISTRA is 'llave de la persona q perdio o encontro la mascota';

--tabla para las imagenes de mascotas
create table IMAGEN(
       ID_IMAGEN number(8),
       NOMBRE_IMG varchar2(30),
       IMAGEN_MASCOTA blob default EMPTY_BLOB())
       
       lob(IMAGEN_MASCOTA) store as (Tablespace ad_media);
alter table IMAGEN add
 constraint pk_imagen
       primary key(ID_IMAGEN)
       using index 
        tablespace ad_ind pctfree 20
        storage (initial 10K next 10K pctincrease 0);
        
COMMENT ON TABLE IMAGEN IS 'Tabla para el alacenamiento de las imagenes de las mascotas';
comment on column IMAGEN.ID_IMAGEN is 'llave primaria de la tabla imagen';
comment on column IMAGEN.IMAGEN_MASCOTA is 'archivo tipo imagen';   

--RAZA DE LA MASCOTA
CREATE TABLE RAZA(
       ID_RAZA NUMBER(8)
              CONSTRAINT ID_RAZA_NN NOT NULL,
       DESCRIPCION_RAZA VARCHAR2(35)
              CONSTRAINT DESCRIPCION_RAZA_NN NOT NULL
              CONSTRAINT DESCRIPCION_UNIQUE UNIQUE,
              
       TIPO_MASCOTA VARCHAR2(35)
              CONSTRAINT TIPOMASCOTA_PORRAZA_NN NOT NULL,
       
       CONSTRAINT PK_RAZA
       primary key (ID_RAZA)
       using index
       tablespace ad_ind pctfree 20
       storage (initial 10k next 10k pctincrease 0)
)
TABLESPACE ad_data
STORAGE (INITIAL 6144
        NEXT 6144
        MINEXTENTS 1
        MAXEXTENTS 5
);

--comentarios
COMMENT ON TABLE RAZA IS 'Tabla para el alacenamiento de las diferentes razas de la mascotas';
comment on column RAZA.ID_RAZA is 'llave primaria de la tabla raza';
comment on column RAZA.DESCRIPCION_RAZA is 'valor final del tipo de raza'; 
comment on column RAZA.TIPO_MASCOTA is 'tipo de mascota al q pertenece la raza'; 

--SECUENCIAS
create sequence s_mascota
       start with 0
       increment by 1
       minvalue 0
       maxvalue 10000000
       nocache
       nocycle;
       
       
create sequence s_raza
       start with 0
       increment by 1
       minvalue 0
       maxvalue 10000000
       nocache
       nocycle;

--FOREIGN KEY
alter table MASCOTA
  add constraint IMAGEN_FK
  foreign key (ID_MASCOTA)
  references IMAGEN(ID_IMAGEN);
  
alter table MASCOTA
  add constraint RAZA_FK
  foreign key (TIPO_Y_RAZA)
  references RAZA(ID_RAZA);
  
alter table MASCOTA
  add constraint DIRECCION_MASCOTA_FK
  foreign key (ID_MASCOTA,TIPO)
  references DIRECCION(ID_DIRECCION, TIPO_DIREC);
  
alter table MASCOTA
  add constraint TEL_MASCOTA_FK
  foreign key (ID_MASCOTA,TIPO)
  references TELEFONO(ID_TEL,TIPO_TEL);

alter table MASCOTA
  add constraint EMAIL_MASCOTA_FK
  foreign key (ID_MASCOTA, TIPO)
  references EMAIL(ID_EMAIL,TIPO_EMAIL); 
