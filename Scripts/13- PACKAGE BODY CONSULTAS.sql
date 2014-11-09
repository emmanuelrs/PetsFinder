CREATE OR REPLACE PACKAGE BODY CONSULTAS AS

FUNCTION VALIDA_USUARIO(USUARIO1 IN VARCHAR2, CONTRASENA IN VARCHAR2)
  RETURN TYPES.ref_c
  AS valida TYPES.ref_c;
  BEGIN
    OPEN valida FOR
    select U.TIPO_USER, U.ID_USUARIO
    FROM USUARIO U
    WHERE U.USER_NAME = USUARIO1 AND U.CONTRASEŅA = contrasena;
   return valida;
  exception
    when NO_DATA_FOUND then
         DBMS_OUTPUT.PUT_LINE('NO EXISTE');

   END VALIDA_USUARIO;

FUNCTION INFO_PER_CASACUNA(username in varchar2)
  RETURN TYPES.ref_c
  AS INFORMA TYPES.ref_c;
     id_user number;
  BEGIN
    select u.id_usuario into id_user from usuario u
    where u.user_name = username;

    OPEN INFORMA FOR
    SELECT U.NOMBRE, U.APELLIDO1, U.APELLIDO2, (select avg(c.calificacion_per) from calificacion c
where c.id_calificacion = id_user),
           D.PROVINCIA,D.CANTON,D.DIRECCION_EXACTA,CC.TAMANO,
           CC.REQUIERE_ALIMENTO, E.VALOR_EMAIL, T.TELEFONO

    FROM CASA_CUNA CC, USUARIO U, DIRECCION D, EMAIL E, TELEFONO T

    WHERE U.ID_USUARIO = CC.ID_PERSONA
    AND D.ID_DIRECCION = U.ID_USUARIO
    AND D.TIPO_DIREC = U.TIPO
    AND E.ID_EMAIL = CC.ID_PERSONA
    AND E.TIPO_EMAIL = U.TIPO
    AND T.ID_TEL = CC.ID_PERSONA
    AND T.TIPO_TEL = U.TIPO;
    RETURN INFORMA;

 END INFO_PER_CASACUNA;

  FUNCTION MATCH2
  RETURN TYPES.ref_c
  AS match1 TYPES.ref_c;
  BEGIN
    OPEN match1 FOR
    SELECT *
    FROM MASCOTA_PERDIDA P, MASCOTA_ENCONTRADA E, RAZA R, DIRECCION D
    WHERE P.TAMANO_PER = E.TAMANO_ENC
      AND P.TIPO_Y_RAZA_PER = E.TIPO_Y_RAZA_ENC
      AND p.COLOR_PER = E.COLOR_ENC
      AND P.TIPO_Y_RAZA_PER= R.ID_RAZA
      AND P.ID_MASCOTA_PER = D.ID_DIRECCION;
    RETURN match1;
 END MATCH2;


END CONSULTAS;
