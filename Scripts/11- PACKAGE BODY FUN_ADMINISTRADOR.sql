CREATE OR REPLACE PACKAGE BODY FUN_ADMINISTRADOR AS

PROCEDURE INSERTAR_RAZA
  (DESCRIPCION IN VARCHAR,TIPO1 IN VARCHAR) AS
  BEGIN
    INSERT INTO RAZA(ID_RAZA, DESCRIPCION_RAZA, TIPO_MASCOTA)
    VALUES(S_RAZA.NEXTVAL,DESCRIPCION, TIPO1);
    COMMIT;

END INSERTAR_RAZA;

PROCEDURE SOLICITUD_CASA_CUNA(id_user in number, taman in varchar2, raza in varchar2, alimento in varchar2) as
  id_raza number;
  begin
    select r.id_raza into id_raza 
    from raza r
    where r.descripcion_raza = raza;

    insert into casa_cuna_pendiente(id_persona, tamano, requiere_alimento)
    values(id_user, taman, alimento);

    insert into raza_admitida(raza_tipo, raza)
    values(id_user, id_raza);
    commit;
end SOLICITUD_CASA_CUNA;

PROCEDURE ACEPTAR_CASA_CUNA(id_user in number)AS
  tamano varchar2(30);
  requiere varchar2(20);
  BEGIN
    select ccp.tamano, ccp.requiere_alimento into tamano, requiere 
    from casa_cuna_pendiente ccp
    where ccp.id_persona = id_user;  
    insert into casa_cuna(id_persona, tamano, requiere_alimento)
    values(id_user, tamano, requiere);
    commit;
    delete from casa_cuna_pendiente 
    where casa_cuna_pendiente.id_persona = id_user;
    commit;
    
end ACEPTAR_CASA_CUNA;

PROCEDURE DENEGAR_CASA_CUNA(id_user in number)AS
  tamano varchar2(30);
  requiere varchar2(20);
  BEGIN
    delete from casa_cuna_pendiente 
    where casa_cuna_pendiente.id_persona = id_user;
    commit;

end DENEGAR_CASA_CUNA;

END FUN_ADMINISTRADOR;
