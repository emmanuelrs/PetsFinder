CREATE TABLE BITACOTA
(
    ID_BITACORA NUMBER(8) CONSTRAINT ID_BITACORA_NN NOT NULL,
    HORA_EVENTO DATE,
    TIPO_EVENTO VARCHAR2(25),
    CODIGO NUMBER(8),
    NOMBRE VARCHAR2(50),
    
    CONSTRAINT PK_BITACORA
    primary key (ID_BITACORA)
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
    
      
create sequence s_bitacora
       start with 0
       increment by 1
       minvalue 0
       maxvalue 10000000
       nocache
       nocycle;
       
