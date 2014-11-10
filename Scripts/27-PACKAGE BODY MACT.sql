CREATE OR REPLACE PACKAGE BODY MATC AS

FUNCTION MATCH2
  RETURN TYPES.ref_c
  AS match1 TYPES.ref_c;
  BEGIN
    OPEN match1 FOR
    select mp.id_mascota_per, u.nombre, u.apellido1, e.valor_email
    from match3 m3, mascota_perdida mp, usuario u, email e
    where m3.id_mascota_per = mp.id_mascota_per and u.id_usuario = mp.usuario_registra_per and u.id_usuario = e.id_email and u.tipo = e.tipo_email;
    RETURN match1;
 END MATCH2;
 
END MATC;
 
 