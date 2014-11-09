CREATE OR REPLACE PACKAGE ACTUALIZACIONES AS

PROCEDURE UPDATE_MASCOTA_ENC(id_masc in number, nombre_masc in varchar2, raza_masc in varchar2, tamano in varchar2, 
  chip in varchar2, color in varchar2, estado in varchar2, recompenza in varchar2, descrip in varchar2);

PROCEDURE UPDATE_MASCOTA_PER(id_masc in number, nombre_masc in varchar2, raza_masc in varchar2, tamano in varchar2, 
  chip in varchar2, color in varchar2, estado in varchar2, recompenza in varchar2, descrip in varchar2);  

PROCEDURE UPDATE_USUARIO(nom in varchar2, ape1 in varchar2, ape2 in varchar2, username in varchar2,
   contra in varchar2);
   
PROCEDURE UPDATE_EMAIL(id_emailN in number, tipo in number, nuevo_email in varchar2);

PROCEDURE UPDATE_TELEFONO(id_telefono in number, tipo in number, nuevo_tel in varchar2);

PROCEDURE UPDATE_DIRECCION(id_direc in number, tipo in number, prov in varchar2, cant in varchar2, distrit in varchar2, exacta in varchar2);

END ACTUALIZACIONES;
