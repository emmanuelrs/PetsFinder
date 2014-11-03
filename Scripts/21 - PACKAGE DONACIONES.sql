CREATE OR REPLACE PACKAGE DONACION AS

PROCEDURE DONAR_RECOMPENSA(id_user in number, nom_org in varchar2, cant in varchar2);

PROCEDURE DONAR_VOLUNTARIA(id_user in number, nom_org in varchar2, cant in varchar2);
  
FUNCTION CONSULTA_DONACION(id_user in number) return TYPES.ref_c;



END DONACION;
