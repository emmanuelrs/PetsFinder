CREATE TABLE ADOPCION
(
       ID_ADOPCION NUMBER(10) CONSTRAINT ID_ADOPCION_NN NOT NULL,
       ID_MASCOTA NUMBER(10) CONSTRAINT ADOPCION_ID_MASCOTA_NN NOT NULL,
       ID_PERSONA NUMBER(10) CONSTRAINT ADOPCION_ID_PERSONA_NN NOT NULL,
       
       CONSTRAINT PK_ADOPCION
       primary key (ID_ADOPCION)
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

-- comentarios TABLA ADOPCION
COMMENT ON TABLE ADOPCION IS 'Tabla donde se guardan las adopciones que se hacen a las mascotas';
comment on column ADOPCION.ID_ADOPCION is 'Llave primaria de la tabla adopcion';
comment on column ADOPCION.ID_MASCOTA is 'Es el campo de donde se va a realizar el foreingkey para tener la mascota';
comment on column ADOPCION.ID_PERSONA is 'Es el campo donde se va a referencias la persona adoptante';


-- Tabla Imagen de adopcion

create table IMAGEN_ADOPCION(
       ID_IMAGEN_ADOPCION number(8),
       NOMBRE_IMG_ADOP varchar2(30),
       IMAGEN_ADOPCION blob default EMPTY_BLOB())
       
       lob(IMAGEN_ADOPCION) store as (Tablespace ad_media);
       alter table IMAGEN_ADOPCION add
       constraint IMAGEN_ADOPCION_PK
       primary key(ID_IMAGEN_ADOPCION)
       using index 
        tablespace ad_ind pctfree 20
        storage (initial 10K next 10K pctincrease 0);


-- Foreing Keys

ALTER TABLE ADOPCION
ADD CONSTRAINT ADOPCION_MASCOTA_FK
FOREIGN KEY(ID_MASCOTA)
REFERENCES MASCOTA_ENCONTRADA(ID_MASCOTA_ENC);


ALTER TABLE ADOPCION
ADD CONSTRAINT ADOPCION_PERSONA_FK
FOREIGN KEY(ID_PERSONA)
REFERENCES USUARIO(ID_USUARIO);

ALTER TABLE ADOPCION
ADD CONSTRAINT IMAGEN_ADOP_FK
FOREIGN KEY (ID_ADOPCION)
REFERENCES IMAGEN_ADOPCION(ID_IMAGEN_ADOPCION);


-- SECUENCIA

create sequence S_ADOPCION
       start with 0
       increment by 1
       minvalue 0
       maxvalue 10000000
       nocache
       nocycle;
       
COMMIT;
