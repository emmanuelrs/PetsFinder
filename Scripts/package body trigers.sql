create or replace package body PACK_TRIGGERS0 as

Procedure INSERT_MASCOTA
  (nom in varchar2, id_mascota number) as
   begin
     insert into bitacora(ID_BITACORA,HORA_EVENTO,TIPO_EVENTO,CODIGO,NOMBRE)
     values(s_bitacora.nextval,SYSDATE,'ISERTO MASCOTA',USER);

    
     commit;
     --falta considerar excepciones
end SET_USUARIO;
