create or replace package INSERTIONS as
Procedure SET_USUARIO (nom in varchar2,pApellido in varchar2,sApellido in varchar2, nomusr in varchar2, contra in varchar2,
   tel in varchar2, email in varchar2, pais1 in varchar2, provincia1 in varchar2,canton1 in varchar2, distrito1 in varchar2, direc_exact in varchar2);
   
   
procedure SET_MASCOTA_ENCONTRADA
(nombre_m in varchar2, raza_m in varchar2, tamano1 in varchar2 ,imagen_m in varchar2,  chip_ident in varchar2, color_m in varchar2,
   estado_m in varchar2, pais1 in varchar2, provincia1 in varchar2, canton1 in varchar2, distrito1 in varchar2, detalle_direc in varchar2,
   recompensa1 in varchar2, descripcion in varchar, fecha in varchar2, usuario in number);  
   
procedure SET_MASCOTA_PERDIDA
(nombre_m in varchar2, raza_m in varchar2, tamano1 in varchar2 ,imagen_m in varchar2,  chip_ident in varchar2, color_m in varchar2,
   estado_m in varchar2, pais1 in varchar2, provincia1 in varchar2, canton1 in varchar2, distrito1 in varchar2, detalle_direc in varchar2,
   recompensa1 in varchar2, descripcion in varchar, fecha in varchar2, usuario in number); 
   
Procedure SET_ORGANIZACION (nombre_org in varchar2, tel in number, email in varchar2, pais1 in varchar2, provincia1 in varchar2,
   canton1 in varchar2, distrito1 in varchar2, direc_exact in varchar2);

END INSERTIONS;
