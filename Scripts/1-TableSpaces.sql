--table space administrador
CREATE TABLESPACE AD_Data
DATAFILE 'C:\app\Luis_G\oradata\Pets\addata.dbf'
SIZE 10M
REUSE
AUTOEXTEND ON
NEXT 512
MAXSIZE 200M;

-- 
CREATE TABLESPACE AD_Ind
DATAFILE 'C:\app\Luis_G\oradata\Pets\adind.dbf'
SIZE 10M
REUSE
AUTOEXTEND ON
NEXT 512k
MAXSIZE 200M;


--table space imagenes

CREATE TABLESPACE AD_Media
DATAFILE 'C:\app\Luis_G\oradata\Pets\usmed.dbf'
SIZE 10M
REUSE
AUTOEXTEND ON
NEXT 512k
MAXSIZE 200M;
