CREATE OR REPLACE PACKAGE BODY FUN_ADMINISTRADOR AS

PROCEDURE INSERTAR_RAZA
  (DESCRIPCION IN VARCHAR,TIPO1 IN VARCHAR) AS
  BEGIN
    INSERT INTO RAZA(ID_RAZA, DESCRIPCION_RAZA, TIPO_MASCOTA)
    VALUES(S_RAZA.NEXTVAL,DESCRIPCION, TIPO1);
    COMMIT;

END INSERTAR_RAZA;

PROCEDURE SOLICITUD_CASA_CUNA(username in varchar2, taman in varchar2, raza in varchar2, alimento in varchar2) as
  id_raza number;
  id_user number;
  begin
    select u.id_usuario into id_user
    from usuario u
    where u.user_name = username;

    select r.id_raza into id_raza
    from raza r
    where r.descripcion_raza = raza;

    insert into casa_cuna_pendiente(id_casa_cuna, id_persona, tamano, requiere_alimento)
    values(s_casa_cuna.nextval, id_user, taman, alimento);

    insert into raza_admitida(raza_tipo, raza)
    values(id_user, id_raza);
    commit;
end SOLICITUD_CASA_CUNA;

PROCEDURE ACEPTAR_CASA_CUNA(id_casa in varchar2)AS
  tama varchar2(30);
  requiere varchar2(20);
  id_user number;
  id_casa_c number;
  BEGIN
    id_casa_c := to_number(RIGHT => id_casa);
    select cp.id_persona, cp.tamano, cp.requiere_alimento into id_user, tama, requiere
    from casa_cuna_pendiente cp
    where cp.id_casa_cuna = id_casa_c;
    
    insert into casa_cuna(id_persona, tamano, requiere_alimento)
    values(id_user, tama, requiere);
    commit;
    delete from casa_cuna_pendiente cp
    where cp.id_casa_cuna = id_casa_c;
    commit;

end ACEPTAR_CASA_CUNA;

PROCEDURE DENEGAR_CASA_CUNA(id_casa in varchar2)AS
  id_casa_c number;
  BEGIN
    id_casa_c := to_number(RIGHT => id_casa);
    
    delete from casa_cuna_pendiente cp
    where cp.id_casa_cuna = id_casa_c;
    commit;

end DENEGAR_CASA_CUNA;

END FUN_ADMINISTRADOR;
