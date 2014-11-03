CREATE OR REPLACE PACKAGE BODY ACTUALIZACIONES AS


PROCEDURE UPDATE_MASCOTA_ENC(id_masc in number, nombre_masc in varchar2, raza_masc in varchar2, tamano in varchar2,
  chip in varchar2, color in varchar2, estado in varchar2, recompenza in varchar2, descrip in varchar2)as
    id_raza number;
  begin
    select r.id_raza into id_raza from raza r
    where r.descripcion_raza = raza_masc;

    update mascota_encontrada me
    set me.nombre_enc = nombre_masc, me.tipo_y_raza_enc = id_raza, me.tamano_enc = tamano, me.chip_identificacion_enc = chip, me.color_enc = color, me.estado_enc = estado, me.recompensa_enc = recompenza, me.descripcion_enc = descrip
    where me.id_mascota_enc = id_masc;

end UPDATE_MASCOTA_ENC;

PROCEDURE UPDATE_MASCOTA_PER(id_masc in number, nombre_masc in varchar2, raza_masc in varchar2, tamano in varchar2,
  chip in varchar2, color in varchar2, estado in varchar2, recompenza in varchar2, descrip in varchar2)as
    id_raza number;
  begin
    select r.id_raza into id_raza from raza r
    where r.descripcion_raza = raza_masc;

    update mascota_perdida mp
    set mp.nombre_per = nombre_masc, mp.tipo_y_raza_per = id_raza, mp.tamano_per = tamano, mp.chip_identificacion_per = chip, mp.color_per = color, mp.estado_per = estado, mp.recompensa_per = recompenza, mp.descripcion_per = descrip
    where mp.id_mascota_per = id_masc;

end UPDATE_MASCOTA_PER;

PROCEDURE UPDATE_USUARIO(id_user in number, nom in varchar2, ape1 in varchar2, ape2 in varchar2, username in varchar2,
   contra in varchar2)AS
  BEGIN
    update usuario u
    set u.nombre = nom, u.apellido1 = ape1, u.apellido2 = ape2, u.user_name = username, u.contraseña = contra
    where u.id_usuario = id_user;
end UPDATE_USUARIO;

PROCEDURE UPDATE_EMAIL(id_emailN in number, tipo in number, nuevo_email in varchar2)AS
  BEGIN
    update email e
    set e.valor_email = nuevo_email
    where e.id_email = id_emailN and e.tipo_email = tipo;
end UPDATE_EMAIL;

PROCEDURE UPDATE_TELEFONO(id_telefono in number, tipo in number, nuevo_tel in varchar2)AS
  BEGIN
    update telefono t
    set t.telefono = nuevo_tel
    where t.id_tel = id_telefono and t.tipo_tel = tipo;
end UPDATE_TELEFONO;

PROCEDURE UPDATE_DIRECCION(id_direc in number, tipo in number, prov in varchar2, cant in varchar2, distrit in varchar2, exacta in varchar2) AS
  BEGIN
    update direccion d
    set d.provincia = prov , d.canton = cant, d.distrito = distrit, d.direccion_exacta = exacta
    where d.id_direccion = id_direc and d.tipo_direc = tipo;
end UPDATE_DIRECCION;

PROCEDURE CALIFICACION(id_user in number, calif in number) as
  begin 
    update usuario u
    set u.calificacion = calif
    where u.id_usuario = id_user;
end CALIFICACION;
  

END ACTUALIZACIONES;
