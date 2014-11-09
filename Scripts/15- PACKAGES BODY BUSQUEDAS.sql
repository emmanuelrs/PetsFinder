CREATE OR REPLACE PACKAGE BODY BUSQUEDAS AS

FUNCTION busquedaProvincia_Enc(pProvincia IN varchar2)
        return TYPES.ref_c
        AS busqProvincia types.ref_c;
        BEGIN
         OPEN busqProvincia FOR
         SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc, I.NOMBRE_IMG
         FROM MASCOTA_ENCONTRADA C, DIRECCION D, IMAGEN I
         WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and D.PROVINCIA like CONCAT(pProvincia, '%') and c.id_mascota_enc = i.id_imagen
         ORDER BY C.FECHA_INGRESO_enc DESC;
         return busqProvincia;
    END busquedaProvincia_Enc;

FUNCTION busquedaProvincia_Per(pProvincia IN varchar2)
        return TYPES.ref_c
        AS busqProvincia types.ref_c;
        BEGIN
         OPEN busqProvincia FOR
         SELECT C.NOMBRE_per,C.ESTADO_per,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per, I.NOMBRE_IMG
         FROM Mascota_Perdida C, DIRECCION D, IMAGEN I
         WHERE C.ID_MASCOTA_per = D.ID_DIRECCION and D.PROVINCIA like CONCAT(pProvincia, '%') and c.id_mascota_per = i.id_imagen
         ORDER BY C.FECHA_INGRESO_per DESC;
         return busqProvincia;
    END busquedaProvincia_Per;

FUNCTION busquedaCanton_Enc(pCanton IN varchar2)
        return TYPES.ref_c
        AS busqCanton types.ref_c;
        BEGIN
         OPEN busqCanton FOR
         SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc, i.nombre_img
         FROM Mascota_Encontrada C, DIRECCION D , imagen i
         WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and D.CANTON like CONCAT(pCanton, '%') and c.id_mascota_enc = i.id_imagen
         ORDER BY C.FECHA_INGRESO_enc DESC;
         return busqCanton;
    END busquedaCanton_Enc;

FUNCTION busquedaCanton_Per(pCanton IN varchar2)
        return TYPES.ref_c
        AS busqCanton types.ref_c;
        BEGIN
         OPEN busqCanton FOR
         SELECT C.NOMBRE_per,C.ESTADO_per,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per, i.nombre_img
         FROM Mascota_Perdida C, DIRECCION D, imagen i
         WHERE C.ID_MASCOTA_per = D.ID_DIRECCION and D.CANTON like CONCAT(pCanton, '%') and c.id_mascota_per = i.id_imagen
         ORDER BY C.FECHA_INGRESO_per DESC;
         return busqCanton;
    END busquedaCanton_Per;

FUNCTION BusquedaDistrito_Enc(pDistrito IN VARCHAR2)
  Return TYPES.ref_c
  AS busqDistrito TYPES.ref_c;
  BEGIN
    OPEN busqDistrito FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc, i.nombre_img
    FROM Mascota_Encontrada C, DIRECCION D, imagen i
    WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and D.Distrito like CONCAT(pDistrito, '%') and c.id_mascota_enc = i.id_imagen
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqDistrito;
 END BusquedaDistrito_Enc;

 FUNCTION BusquedaDistrito_Per(pDistrito IN VARCHAR2)
  Return TYPES.ref_c
  AS busqDistrito TYPES.ref_c;
  BEGIN
    OPEN busqDistrito FOR
    SELECT C.NOMBRE_per,C.ESTADO_per,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per, i.nombre_img
    FROM Mascota_Perdida C, DIRECCION D, imagen i
    WHERE C.ID_MASCOTA_per = D.ID_DIRECCION and D.Distrito like CONCAT(pDistrito, '%') and c.id_mascota_per = i.id_imagen
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqDistrito;
 END BusquedaDistrito_Per;

FUNCTION busquedaChip_Enc(pChip IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqChip TYPES.ref_c;
  BEGIN
    OPEN busqChip FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc, i.nombre_img
    FROM Mascota_Encontrada C, DIRECCION D, imagen i
    WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and C.CHIP_IDENTIFICACION_enc like CONCAT(pChip, '%') and c.id_mascota_enc = i.id_imagen
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqChip;
 END busquedaChip_Enc;

FUNCTION busquedaChip_Per(pChip IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqChip TYPES.ref_c;
  BEGIN
    OPEN busqChip FOR
    SELECT C.NOMBRE_per,C.ESTADO_per,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per, i.nombre_img
    FROM Mascota_Perdida C, DIRECCION D, imagen i
    WHERE C.ID_MASCOTA_per = D.ID_DIRECCION and C.CHIP_IDENTIFICACION_per like CONCAT(pChip, '%') and c.id_mascota_per = i.id_imagen
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqChip;
 END busquedaChip_Per;

FUNCTION busquedaEstado_Enc(pEstado IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqEstado TYPES.ref_c;
  BEGIN
    OPEN busqEstado FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc, i.nombre_img
    FROM MASCOTA_ENCONTRADA C, DIRECCION D, imagen i
    WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and C.ESTADO_enc like CONCAT(pEstado, '%') and c.id_mascota_enc = i.id_imagen
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqEstado;
 END busquedaEstado_Enc;

 FUNCTION busquedaEstado_Per(pEstado IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqEstado TYPES.ref_c;
  BEGIN
    OPEN busqEstado FOR
    SELECT C.NOMBRE_per,C.ESTADO_per,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per, i.nombre_img
    FROM Mascota_Perdida C, DIRECCION D, imagen i
    WHERE C.ID_MASCOTA_per = D.ID_DIRECCION and C.ESTADO_per like CONCAT(pEstado, '%') and c.id_mascota_per = i.id_imagen
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqEstado;
 END busquedaEstado_Per;


FUNCTION busquedaTipo_Enc(pTipo IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqTipo TYPES.ref_c;
  BEGIN
    OPEN busqTipo FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc, R.DESCRIPCION_RAZA, R.TIPO_MASCOTA, D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc, i.nombre_img
    FROM Mascota_Encontrada C, DIRECCION D, RAZA R, imagen i
    WHERE R.TIPO_MASCOTA  like CONCAT(pTipo, '%') and c.tipo_y_raza_enc = r.id_raza and c.id_mascota_enc = d.id_direccion and c.id_mascota_enc = i.id_imagen
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqTipo;
 END busquedaTipo_Enc;

FUNCTION busquedaTipo_Per(pTipo IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqTipo TYPES.ref_c;
  BEGIN
    OPEN busqTipo FOR
    SELECT C.NOMBRE_per,C.ESTADO_per, R.DESCRIPCION_RAZA, R.TIPO_MASCOTA, D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per, i.nombre_img
    FROM Mascota_Perdida C, DIRECCION D, RAZA R, imagen i
    WHERE R.TIPO_MASCOTA  like CONCAT(pTipo, '%') and c.tipo_y_raza_per = r.id_raza and c.id_mascota_per = d.id_direccion and c.id_mascota_per = i.id_imagen
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqTipo;
 END busquedaTipo_Per;

FUNCTION busquedaRaza_Enc(pRaza IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqRaza TYPES.ref_c;
  BEGIN
    OPEN busqRaza FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc, R.DESCRIPCION_RAZA, R.TIPO_MASCOTA, D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc, i.nombre_img
    FROM Mascota_Encontrada C, DIRECCION D, RAZA R, imagen i
    WHERE R.DESCRIPCION_RAZA like CONCAT(pRaza, '%') and c.tipo_y_raza_enc = r.id_raza and c.id_mascota_enc = d.id_direccion and c.id_mascota_enc = i.id_imagen
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqRaza;
 END busquedaRaza_Enc;

FUNCTION busquedaRaza_Per(pRaza IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqRaza TYPES.ref_c;
  BEGIN
    OPEN busqRaza FOR
    SELECT C.NOMBRE_per,C.ESTADO_per, R.DESCRIPCION_RAZA, R.TIPO_MASCOTA, D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per, i.nombre_img
    FROM Mascota_Perdida C, DIRECCION D, RAZA R, imagen i
    WHERE R.DESCRIPCION_RAZA like CONCAT(pRaza, '%') and c.tipo_y_raza_per = r.id_raza and c.id_mascota_per = d.id_direccion and c.id_mascota_per = i.id_imagen
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqRaza;
 END busquedaRaza_Per;
 
FUNCTION busqueda_adopciones
  RETURN TYPES.ref_c
  AS busqEstadoPER TYPES.ref_c;
  BEGIN
    OPEN busqEstadoPER FOR
    SELECT C.NOMBRE_ADOP,C.ESTADO_ADOP,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.Fecha_Ingreso_Adop, i.nombre_img
    FROM MASCOTA_ADOPTAR C, DIRECCION D, IMAGEN I
    WHERE C.ID_MASCOTA_ADOP = D.ID_DIRECCION and C.ESTADO_ADOP = 'Adoptar' and C.ID_MASCOTA_ADOP = i.id_imagen
    ORDER BY C.Fecha_Ingreso_Adop DESC;
    RETURN busqEstadoPER;
 END busqueda_adopciones;
 
END BUSQUEDAS;
