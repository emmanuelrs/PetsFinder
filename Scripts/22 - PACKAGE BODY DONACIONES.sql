CREATE OR REPLACE PACKAGE BODY DONACION AS
PROCEDURE DONAR_RECOMPENSA(id_user in number, nom_org in varchar2, cant in varchar2) as 
  id_org number;
  begin
    select o.id_organizacion into id_org  from organizacion_casa_cuna o
    where o.id_organizacion = nom_org;
    
    insert into donaciones(id_donacion, donador, cantidad, tipo_donacion)
    values(id_org, id_user, cant, 'Recompensa');
    commit;
end DONAR_RECOMPENSA;

PROCEDURE DONAR_VOLUNTARIA(id_user in number, nom_org in varchar2, cant in varchar2) as 
  id_org number;
  begin
    select o.id_organizacion into id_org  from organizacion_casa_cuna o
    where o.id_organizacion = nom_org;
    
    insert into donaciones(id_donacion, donador, cantidad, tipo_donacion)
    values(id_org, id_user, cant, 'Voluntaria');
    commit;
end DONAR_VOLUNTARIA;

FUNCTION CONSULTA_DONACION(id_user in number)
        return TYPES.ref_c
        AS donaciones types.ref_c;
        BEGIN
         OPEN donaciones FOR
         SELECT o.nombre_org, u.nombre, u.apellido1, d.cantidad
         FROM organizacion_casa_cuna o, usuario u, donaciones d
         WHERE d.id_donacion = o.id_organizacion and d.donador = id_user;      
         return donaciones;
    END CONSULTA_DONACION;




END DONACION;
