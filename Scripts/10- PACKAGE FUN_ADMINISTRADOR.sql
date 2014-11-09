CREATE OR REPLACE PACKAGE FUN_ADMINISTRADOR AS

PROCEDURE INSERTAR_RAZA(DESCRIPCION IN VARCHAR,TIPO1 IN VARCHAR);

PROCEDURE SOLICITUD_CASA_CUNA(username in varchar2, taman in varchar2, raza in varchar2, alimento in varchar2);

PROCEDURE ACEPTAR_CASA_CUNA(id_casa in varchar2);

PROCEDURE DENEGAR_CASA_CUNA(id_casa in varchar2);

FUNCTION Casa_cuna_pen RETURN TYPES.ref_c;
/*
FUNCTION Black_list RETURN TYPES.ref_c;
*/
PROCEDURE Adoptar(id_user in varchar2, id_adopcion in varchar2);

END FUN_ADMINISTRADOR;
