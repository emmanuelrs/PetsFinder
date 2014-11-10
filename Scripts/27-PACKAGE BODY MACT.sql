CREATE OR REPLACE PACKAGE BODY MATC AS

FUNCTION MATCH2
  RETURN TYPES.ref_c
  AS match1 TYPES.ref_c;
  BEGIN
    OPEN match1 FOR
    select *
    from match_pendientes;
    delete from match_pendientes;
    commit;
    RETURN match1;

 END MATCH2;
 
 PROCEDURE BUSCA_MATCH AS
   id_m number;
   nom varchar2(30);
   ape varchar2(30);
   email varchar2(100);
   begin
     select mp.id_mascota_per, u.nombre, u.apellido1, e.valor_email into id_m, nom, ape, email
    from match3 m3, mascota_perdida mp, usuario u, email e
    where m3.id_mascota_per = mp.id_mascota_per and u.id_usuario = mp.usuario_registra_per and u.id_usuario = e.id_email and u.tipo = e.tipo_email;
    
    insert into match_pendientes(id_masc, nombre_usuario, apellido_usuario, email_usuario)
    values(id_m, nom, ape, email);
    commit;
 end BUSCA_MATCH;
 
END MATC;
 
 
