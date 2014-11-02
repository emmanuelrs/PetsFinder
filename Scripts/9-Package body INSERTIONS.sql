create or replace package body INSERTIONS as

Procedure SET_USUARIO
  (nom in varchar2,pApellido in varchar2,sApellido in varchar2, nomusr in varchar2, contra in varchar2,
   tel in varchar2, email in varchar2, pais1 in varchar2, provincia1 in varchar2,
   canton1 in varchar2, distrito1 in varchar2, direc_exact in varchar2) as
   begin


     insert into email(ID_EMAIL, TIPO_EMAIL, VALOR_EMAIL)
     values(s_usuario.nextval, 1, email);

     insert into telefono(id_tel, tipo_tel, telefono)
     values(s_usuario.currval, 1, tel);

     insert into direccion(id_direccion, tipo_direc, pais, provincia, canton, distrito, direccion_exacta)
     values(s_usuario.currval, 1, pais1, provincia1, canton1, distrito1, direc_exact);

     insert into usuario(id_usuario, tipo, nombre, apellido1, apellido2, user_name, contraseña, tipo_user)
     values(s_usuario.currval, 1,nom, pApellido, sApellido, nomusr, contra, 1);

     commit;
     --falta considerar excepciones
end SET_USUARIO;


procedure SET_MASCOTA_ENCONTRADA
  (nombre_m in varchar2, raza_m in varchar2, tamano1 in varchar2 ,imagen_m in varchar2,  chip_ident in varchar2, color_m in varchar2,
   estado_m in varchar2, pais1 in varchar2, provincia1 in varchar2, canton1 in varchar2, distrito1 in varchar2, detalle_direc in varchar2,
   recompensa1 in varchar2, descripcion in varchar, fecha in varchar2, usuario in number) as

           tipo_y_raza1 number(8);
           v_blob blob;
           v_bfile bfile;
 BEGIN
    select rz.id_raza into tipo_y_raza1 from raza rz
    where rz.descripcion_raza = raza_m;

    insert into imagen(id_imagen, nombre_img)
           values(s_mascota_enc.nextval, imagen_m) returning IMAGEN_MASCOTA  into v_blob;
           v_bfile := BFILENAME('DIRECTORIO', imagen_m);
            DBMS_LOB.OPEN(v_bfile, DBMS_LOB.lob_readonly);
            DBMS_LOB.LOADFROMFILE(v_blob, v_bfile, DBMS_LOB.getlength(v_bfile));
            DBMS_LOB.CLOSE(v_bfile);
    commit;

    insert into direccion(id_direccion, tipo_direc, pais, provincia, canton, distrito, direccion_exacta)
    values(s_mascota_enc.currval, 2, pais1, provincia1, canton1, distrito1, detalle_direc);

    insert into MASCOTA_ENCONTRADA(ID_MASCOTA_ENC, TIPO_ENC, NOMBRE_ENC, TIPO_Y_RAZA_ENC, TAMANO_ENC, CHIP_IDENTIFICACION_ENC,
    COLOR_ENC, ESTADO_ENC, RECOMPENSA_ENC, DESCRIPCION_ENC, FECHA_INGRESO_ENC, USUARIO_REGISTRA_ENC)
    values(s_mascota_enc.currval, 2, nombre_m, tipo_y_raza1, tamano1 ,chip_ident, color_m, estado_m, recompensa1, descripcion, to_date(fecha, 'dd/mm/yyyy'), usuario);
    commit;

    exception
    when NO_DATA_FOUND then
      dbms_output.put_line('el tipo y raza d mascota no esta registrada');
end SET_MASCOTA_ENCONTRADA;


procedure SET_MASCOTA_PERDIDA
  (nombre_m in varchar2, raza_m in varchar2, tamano1 in varchar2 ,imagen_m in varchar2,  chip_ident in varchar2, color_m in varchar2,
   estado_m in varchar2, pais1 in varchar2, provincia1 in varchar2, canton1 in varchar2, distrito1 in varchar2, detalle_direc in varchar2,
   recompensa1 in varchar2, descripcion in varchar, fecha in varchar2, usuario in number) as

           tipo_y_raza1 number(8);
           v_blob blob;
           v_bfile bfile;
 BEGIN
    select rz.id_raza into tipo_y_raza1 from raza rz
    where rz.descripcion_raza = raza_m;

    insert into imagen(id_imagen, nombre_img)
           values(s_mascota_per.nextval, imagen_m) returning IMAGEN_MASCOTA  into v_blob;
           v_bfile := BFILENAME('DIRECTORIO', imagen_m);
            DBMS_LOB.OPEN(v_bfile, DBMS_LOB.lob_readonly);
            DBMS_LOB.LOADFROMFILE(v_blob, v_bfile, DBMS_LOB.getlength(v_bfile));
            DBMS_LOB.CLOSE(v_bfile);
    commit;

    insert into direccion(id_direccion, tipo_direc, pais, provincia, canton, distrito, direccion_exacta)
    values(s_mascota_per.currval, 2, pais1, provincia1, canton1, distrito1, detalle_direc);

    insert into MASCOTA_PERDIDA(ID_MASCOTA_PER, TIPO_PER, NOMBRE_PER, TIPO_Y_RAZA_PER, TAMANO_PER, CHIP_IDENTIFICACION_PER, 
    COLOR_PER, ESTADO_PER, RECOMPENSA_PER, DESCRIPCION_PER, FECHA_INGRESO_PER, USUARIO_REGISTRA_PER)

    values(s_mascota_enc.currval, 2, nombre_m, tipo_y_raza1, tamano1 ,chip_ident, color_m, estado_m, recompensa1, descripcion, to_date(fecha, 'dd/mm/yyyy'), usuario);
    commit;

    exception
    when NO_DATA_FOUND then
      dbms_output.put_line('el tipo y raza d mascota no esta registrada');
end SET_MASCOTA_PERDIDA;

/* FALTA CON UN TRIGER SACAR EL ID DEL USUARIO Q REGISTRA LA MASCOTA */


Procedure SET_ORGANIZACION
  (nombre_org in varchar2, tel in number, email in varchar2, pais1 in varchar2, provincia1 in varchar2,
   canton1 in varchar2, distrito1 in varchar2, direc_exact in varchar2) as
  begin

    insert into telefono(id_tel, tipo_tel, telefono)
    values(s_org.nextval,'Org',tel);

    insert into email(id_email, valor_email, tipo_email)
    values(s_org.currval, email, 'Org');

    insert into direccion(id_direccion, tipo_direc, pais, provincia, canton, distrito, direccion_exacta)
    values(s_org.currval,'Org' ,pais1, provincia1, canton1, distrito1, direc_exact);

    insert into organizacion_casa_cuna(id_organizacion, tipo, nombre_org)
    values(s_org.currval,'Org', nombre_org);
    commit;
    --falta considerar excepciones
end SET_ORGANIZACION;

END INSERTIONS;
