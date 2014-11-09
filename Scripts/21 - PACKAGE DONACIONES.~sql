CREATE OR REPLACE PACKAGE DONACION AS

PROCEDURE DONAR_RECOMPENSA(username in varchar, nom_org in varchar2, cant in number);

PROCEDURE DONAR_VOLUNTARIA(username in varchar2, nom_org in varchar2, cant in number);
  
FUNCTION CONSULTA_DONACION(username in varchar2)return TYPES.ref_c;

END DONACION;
