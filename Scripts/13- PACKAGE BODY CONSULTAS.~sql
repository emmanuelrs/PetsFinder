CREATE OR REPLACE PACKAGE BODY CONSULTAS AS

FUNCTION VALIDA_USUARIO(USUARIO1 IN VARCHAR2, CONTRASENA IN VARCHAR)return number
 as id_persona number;
 BEGIN
   select U.id_usuario INTO id_persona FROM USUARIO U
   WHERE U.USER_NAME = USUARIO1 AND U.CONTRASEÑA = contrasena;
  return id_persona;
 exception
   when NO_DATA_FOUND then
     id_persona := 0;
     return id_persona;
     
  END VALIDA_USUARIO;

END CONSULTAS;
