--Tabla usuario para almacenar usuarios tanto usuarios normales como usuarios administradores
CREATE TABLE USUARIO(
       ID_USUARIO NUMBER(8)
              CONSTRAINT ID_USUARIO_NN NOT NULL,
       NOMBRE VARCHAR2(35) -- nombre real del usuario 
              CONSTRAINT NOMBRE_NN NOT NULL,
       USER_NAME VARCHAR2(35) --nombre de usuario para el sistema
              CONSTRAINT USERNAME_NN NOT NULL
              CONSTRAINT USERNAME_UK UNIQUE,
       CONTRASEÑA VARCHAR2(35)
              CONSTRAINT CONTRASEÑA_NN NOT NULL
              CONSTRAINT CONTRASEÑA_UK UNIQUE,
       CALIFICACION NUMBER(5,2) DEFAULT 5.0,
       TIPO_USER NUMBER(5) default 1
              CONSTRAINT TIPO_USER_NN NOT NULL,
       
       CONSTRAINT PK_USUARIO
       primary key (ID_USUARIO)
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

-- comentarios categoria articulos
COMMENT ON TABLE USUARIO IS 'Tabla para el alacenamiento de usuarios tanto usuarios normales como usuarios administradores';
comment on column USUARIO.ID_USUARIO is 'llave primaria de la tabla usuarios';
comment on column USUARIO.NOMBRE is 'Nombre real del usuario';
comment on column USUARIO.USER_NAME is 'Nombre de usuario para utilizar en la pagina';
comment on column USUARIO.CONTRASEÑA is 'Contraseña para el ingreso del usuario al sistema';
comment on column USUARIO.CALIFICACION is 'calificacion  del usuario "reputacion"';


-- Tabla direcciones.

CREATE TABLE DIRECCION(
       ID_DIRECCION NUMBER(8)
             CONSTRAINT ID_DIRECCION_NN NOT NULL,
       TIPO_DIREC varchar2(20)
             CONSTRAINT TIPO_DIREC_NN NOT NULL,
       PAIS VARCHAR2(25)
              CONSTRAINT PAIS_NN NOT NULL,
       PROVINCIA VARCHAR2(25)
              CONSTRAINT PROVINCIA_NN NOT NULL,
       CANTON VARCHAR2(25)
              CONSTRAINT CANTON_NN NOT NULL,
       DISTRITO VARCHAR2(25)
              CONSTRAINT DISTRITO_NN NOT NULL,
       DIRECCION_EXACTA VARCHAR2(150),
       
       CONSTRAINT PK_DIRECCION
       PRIMARY KEY(ID_DIRECCION)
       USING INDEX
       tablespace ad_ind pctfree 20
       storage(initial 10k next 10k pctincrease 0)
)
TABLESPACE ad_data
STORAGE (INITIAL 6144
        NEXT 6144
        MINEXTENTS 1
        MAXEXTENTS 5
); 

--tabla de tipos de usuario
CREATE TABLE TIPO_USUARIO(
       ID_TIPO NUMBER(8)
              CONSTRAINT ID_TIPO_NN NOT NULL,
       TIPO_USUARIO VARCHAR2(35) 
              CONSTRAINT TIPO_USUARIO_NN NOT NULL
              CONSTRAINT TIPO_USUARIO_UK UNIQUE,
       
       CONSTRAINT PK_TIPO_USUARIO
       primary key (ID_TIPO)
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
COMMENT ON TABLE TIPO_USUARIO IS 'Tabla para el alacenamiento del tipo de usuarios por ejm normal, administrador';
comment on column TIPO_USUARIO.ID_TIPO is 'llave primaria de la tabla tipo usuario';
comment on column TIPO_USUARIO.TIPO_USUARIO is 'descripcion del tipo de usuario';

--tabla de los telefonos de los usuarios
CREATE TABLE TELEFONO(
       ID_TEL NUMBER(8)
              CONSTRAINT ID_TEL_NN NOT NULL,
       TELEFONO NUMBER(12) 
              CONSTRAINT TELEFENO_USER_NN NOT NULL
              CONSTRAINT TELEFONO_USER_UK UNIQUE,
       TIPO_TEL VARCHAR2(25)
              CONSTRAINT TIPO_TEL_NN NOT NULL,
       
       CONSTRAINT PK_ID_TEL
       primary key (ID_TEL)
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
COMMENT ON TABLE TELEFONO IS 'Tabla para el alacenamiento de los numeros de telefono del usuario';
comment on column TELEFONO.ID_TEL is 'llave primaria de la tabla tel usuario';
comment on column TELEFONO.TELEFONO is 'numero de telefono ya sea celular, residencial o otro del usuario';


--tabla de correos de usuarios
CREATE TABLE EMAIL(
       ID_EMAIL NUMBER(8)
              CONSTRAINT ID_EMAIL_NN NOT NULL,
       VALOR_EMAIL VARCHAR2(35) 
              CONSTRAINT VALOR_EMAIL_NN NOT NULL
              CONSTRAINT VALOR_EMAIL_UK UNIQUE,
       TIPO_EMAIL VARCHAR2(25)
              CONSTRAINT TIPO_EMAIL_NN NOT NULL,
       
       CONSTRAINT PK_ID_EMAIL
       primary key (ID_EMAIL)
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
COMMENT ON TABLE EMAIL IS 'Tabla para el alacenamiento de los email´s del usuario';
comment on column EMAIL.ID_EMAIL is 'llave primaria de la tabla email usuario';
comment on column EMAIL.VALOR_EMAIL is 'email del usuario';

--tabla de usuarios considerados cm no aptos
CREATE TABLE LISTA_NEGRA(
       ID_BLACK NUMBER(8)
              CONSTRAINT ID_BLACK_NN NOT NULL,
       ID_PERSONA NUMBER(8)
              CONSTRAINT ID_BLACKPERSONA_UK UNIQUE,
       
       CONSTRAINT PK_ID_BLACK
       primary key (ID_BLACK)
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
COMMENT ON TABLE LISTA_NEGRA IS 'Tabla para el alacenamiento del id de los usuarios calalogados con mala reputacion';
comment on column LISTA_NEGRA.ID_BLACK is 'llave primaria de la tabla lista negra';
comment on column LISTA_NEGRA.ID_PERSONA is 'llave primaria de la tabla usuarios con la cual se podra acceder a los datos del usuario';

--tabla de casas cuna
CREATE TABLE CASA_CUNA(
       ID_CASA_CUNA NUMBER(8)
              CONSTRAINT ID_CASACUNA_NN NOT NULL,
       ID_PERSONA NUMBER(8)
              CONSTRAINT ID_PERSONA_CASACUNA_NN NOT NULL
              CONSTRAINT ID_PERSONA_CASACUNA_UK UNIQUE,
       RAZA NUMBER(8)
              CONSTRAINT CASACUNA_RAZA_NN NOT NULL,
       REQUIERE_ALIMENTO VARCHAR2(2) DEFAULT 'NO'
              CONSTRAINT CK_REQUIERE_ALIMENTO CHECK (REQUIERE_ALIMENTO IN ('SI', 'NO')),
               
       CONSTRAINT PK_CASACUNA
       primary key (ID_CASA_CUNA)
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
COMMENT ON TABLE CASA_CUNA IS 'Tabla para el alacenamiento de los usuarios q desean ser casa cuna';
comment on column CASA_CUNA.ID_CASA_CUNA is 'llave primaria de la tabla casa cuna';
comment on column CASA_CUNA.ID_PERSONA is 'llave q indica q usuario es quien desea ser casa cuna';
comment on column CASA_CUNA.TIPO_MASCOTA is 'indicador del tipo de mascota al cual se desea ser casa cuna por ejm PERRO, GATO, IGUANA ETC';
comment on column CASA_CUNA.RAZA is 'raza de la mascota de la cua se desea ser casa cuna';
comment on column CASA_CUNA.REQUIERE_ALIMENTO is 'indicador de tan solo 2 valores "si , no" para saber si el usuario q desea ser casa cuna requiere de alimento para la mascota o si el lo dona por default la casa cuna donara el alimento';

--secuencias
create sequence s_usuario
       start with 0
       increment by 1
       minvalue 0
       maxvalue 10000000
       nocache
       nocycle;
       
create sequence s_tipoUser
       start with 0
       increment by 1
       minvalue 0
       maxvalue 10000000
       nocache
       nocycle;
       
create sequence s_blackList
       start with 0
       increment by 1
       minvalue 0
       maxvalue 10000000
       nocache
       nocycle;
       
--FOREIGN KEY
 alter table USUARIO
  add constraint DIRECCION_FK
  foreign key (ID_USUARIO)
  references DIRECCION(ID_DIRECCION);
  
 alter table USUARIO
  add constraint TIPO_USER_FK
  foreign key (TIPO_USER)
  references TIPO_USUARIO(ID_TIPO);
  
 alter table USUARIO
  add constraint TEL_USUARIO_FK
  foreign key (ID_USUARIO)
  references TELEFONO(ID_TEL);

 alter table USUARIO
  add constraint EMAIL_USER_FK
  foreign key (ID_USUARIO)
  references EMAIL(ID_EMAIL);
  
 alter table LISTA_NEGRA
  add constraint BLACK_USER_FK
  foreign key (ID_PERSONA)
  references USUARIO(ID_USUARIO);

 alter table CASA_CUNA
  add constraint USER_CASACUNA_FK
  foreign key (ID_PERSONA)
  references USUARIO(ID_USUARIO);
  
  
insert into tipo_usuario(id_tipo, tipo_usuario)
values(s_tipouser.nextval, 'Usuario');

insert into tipo_usuario(id_tipo, tipo_usuario)
values(s_tipouser.nextval, 'Administrador');

commit;
