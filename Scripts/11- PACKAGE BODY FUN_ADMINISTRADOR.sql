CREATE OR REPLACE PACKAGE BODY FUN_ADMINISTRADOR AS

PROCEDURE INSERTAR_RAZA
  (DESCRIPCION IN VARCHAR,TIPO1 IN VARCHAR) AS
  BEGIN
    INSERT INTO RAZA(ID_RAZA, DESCRIPCION_RAZA, TIPO_MASCOTA)
    VALUES(S_RAZA.NEXTVAL,DESCRIPCION, TIPO1);
    COMMIT;

END INSERTAR_RAZA;

PROCEDURE SOLICITUD_CASA_CUNA(username in varchar2, taman in varchar2, raza in varchar2, alimento in varchar2) as
  id_raz number;
  id_user number;
  begin
    select u.id_usuario into id_user
    from usuario u
    where u.user_name = username;

    select r.id_raza into id_raz
    from raza r
    where r.descripcion_raza = raza;

    insert into casa_cuna(id_casa_cuna, id_persona, tamano, requiere_alimento, id_raza, estado, calificacion_user)
    values(s_casa_cuna.nextval, id_user, taman, alimento, id_raz, 'Pendiente', (select avg(c.calificacion_per) from calificacion c
where c.id_calificacion = id_user));
    commit;
end SOLICITUD_CASA_CUNA;

PROCEDURE ACEPTAR_CASA_CUNA(id_casa in varchar2)AS
  id_casa_c number;
  BEGIN
    id_casa_c := to_number(RIGHT => id_casa);

    update casa_cuna cc
    set cc.estado = 'Autorizado'
    where cc.id_casa_cuna = id_casa_c;
    commit;
end ACEPTAR_CASA_CUNA;

PROCEDURE DENEGAR_CASA_CUNA(id_casa in varchar2)AS
  id_casa_c number;
  BEGIN
    id_casa_c := to_number(RIGHT => id_casa);

    delete from casa_cuna cc
    where cc.id_casa_cuna = id_casa_c;
    commit;

end DENEGAR_CASA_CUNA;

FUNCTION Casa_cuna_pen
  RETURN TYPES.ref_c
  AS casa TYPES.ref_c;
  BEGIN
    OPEN casa FOR
    SELECT cc.id_casa_cuna, u.nombre, u.apellido1, cc.calificacion_user, r.descripcion_raza, r.tipo_mascota, cc.tamano, cc.requiere_alimento
    FROM Casa_Cuna cc, usuario u, raza r
    WHERE cc.id_persona = u.id_usuario and cc.id_raza = r.id_raza and cc.estado = 'Pendiente';
    RETURN casa;
 END Casa_cuna_pen;
/*
FUNCTION Black_list
  RETURN TYPES.ref_c
  AS lista TYPES.ref_c;
  BEGIN
    OPEN lista FOR
    SELECT *
    FROM lista_negra;
    RETURN lista;
 END Black_list;
*/
PROCEDURE Adoptar(id_user in varchar2, id_adopcion in varchar2)AS
  id_usuario number;
  id_adop number;
  BEGIN
    id_usuario := to_number(RIGHT => id_user);
    id_adop := to_number(RIGHT => id_adopcion);

    update mascota_adoptar ma
    set ma.estado = 'Adoptada'
    where ma.id_mascota_adop = id_adop;

    insert into adopcion(id_adopcion, id_mascota, id_persona)
    values(s_adopcion.nextval, id_adop, id_usuario);
    commit;

end Adoptar;

END FUN_ADMINISTRADOR;
