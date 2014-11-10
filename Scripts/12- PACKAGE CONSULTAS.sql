CREATE OR REPLACE PACKAGE CONSULTAS AS
FUNCTION VALIDA_USUARIO(USUARIO1 IN VARCHAR2, CONTRASENA IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION INFO_PER_CASACUNA(username in varchar2) RETURN TYPES.ref_c;
FUNCTION MATCH2 RETURN TYPES.ref_c;
FUNCTION MisAdop(id_usuario in varchar2) RETURN TYPES.ref_c;
FUNCTION IMGAdop(id_usuario in varchar2) RETURN TYPES.ref_c;
FUNCTION Distinto(username in varchar2) RETURN TYPES.ref_c;
FUNCTION Mis_mascotas_per(id_usuario in varchar2) RETURN TYPES.ref_c;
FUNCTION Coincidencias(id_perdida in varchar2) RETURN TYPES.ref_c;
END CONSULTAS;
