CREATE OR REPLACE PACKAGE BODY DONACION AS

PROCEDURE DONAR_RECOMPENSA(username in varchar, nom_org in varchar2, cant in varchar2) as 
  id_org number;
  id_user number;
  canti number;
  begin
    canti := to_number(RIGHT => cant);
    select u.id_usuario into id_user
    from usuario u
    where u.user_name = username;
    
    select o.id_organizacion into id_org  from organizacion_casa_cuna o
    where o.nombre_org = nom_org;
    
    insert into donaciones(id_donacion, donador, cantidad, tipo_donacion)
    values(id_org, id_user, canti, 'Recompensa');
    commit;
end DONAR_RECOMPENSA;

PROCEDURE DONAR_VOLUNTARIA(username in varchar2, nom_org in varchar2, cant in varchar2) as 
  id_org number;
  id_user number;
  canti number;
  begin
    canti := to_number(RIGHT => cant);
    select u.id_usuario into id_user
    from usuario u
    where u.user_name = username;
    
    select o.id_organizacion into id_org  from organizacion_casa_cuna o
    where o.nombre_org = nom_org;
    
    insert into donaciones(id_donacion, donador, cantidad, tipo_donacion)
    values(id_org, id_user, canti, 'Voluntaria');
    commit;
end DONAR_VOLUNTARIA;

FUNCTION CONSULTA_DONACION(username in varchar2)
        return TYPES.ref_c
        AS donaciones types.ref_c;
        id_user number;
        begin
         select u.id_usuario into id_user
          from usuario u
          where u.user_name = username;
          
         OPEN donaciones FOR
         SELECT o.nombre_org, u.nombre, u.apellido1, d.cantidad
         FROM organizacion_casa_cuna o, usuario u, donaciones d
         WHERE d.id_donacion = o.id_organizacion and d.donador = id_user;      
         return donaciones;
    END CONSULTA_DONACION;
    
FUNCTION CONSULTA_org
        return TYPES.ref_c
        AS org types.ref_c;
        begin
         OPEN org FOR
         SELECT o.nombre_org
         FROM organizacion_casa_cuna o;
         return org;
    END CONSULTA_org;

END DONACION;
