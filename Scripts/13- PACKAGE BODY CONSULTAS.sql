CREATE OR REPLACE PACKAGE BODY BUSQUEDAS AS

FUNCTION busquedaProvincia(pProvincia IN varchar2)
        return TYPES.ref_c
        AS busqProvincia types.ref_c;
        BEGIN
         OPEN busqProvincia FOR
         SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc
         FROM MASCOTA_ENCONTRADA C, DIRECCION D
         WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and D.PROVINCIA like CONCAT(pProvincia, '%')
         ORDER BY C.FECHA_INGRESO_enc DESC;
         return busqProvincia;
    END busquedaProvincia;

FUNCTION busquedaCanton(pCanton IN varchar2)
        return TYPES.ref_c
        AS busqCanton types.ref_c;
        BEGIN
         OPEN busqCanton FOR
         SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc
         FROM Mascota_Encontrada C, DIRECCION D
         WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and D.CANTON like CONCAT(pCanton, '%')
         ORDER BY C.FECHA_INGRESO_enc DESC;
         return busqCanton;
    END busquedaCanton;


FUNCTION BusquedaDistrito(pDistrito IN VARCHAR2)
  Return TYPES.ref_c
  AS busqDistrito TYPES.ref_c;
  BEGIN
    OPEN busqDistrito FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc
    FROM Mascota_Encontrada C, DIRECCION D
    WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and D.Distrito like CONCAT(pDistrito, '%')
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqDistrito;
 END BusquedaDistrito;

FUNCTION busquedaChip_Enc(pChip IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqChip TYPES.ref_c;
  BEGIN
    OPEN busqChip FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc
    FROM Mascota_Encontrada C, DIRECCION D
    WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and C.CHIP_IDENTIFICACION_enc like CONCAT(pChip, '%')
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqChip;
 END busquedaChip_Enc;

FUNCTION busquedaChip_Per(pChip IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqChip TYPES.ref_c;
  BEGIN
    OPEN busqChip FOR
    SELECT C.NOMBRE_per,C.ESTADO_per,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per
    FROM Mascota_Perdida C, DIRECCION D
    WHERE C.ID_MASCOTA_per = D.ID_DIRECCION and C.CHIP_IDENTIFICACION_per like CONCAT(pChip, '%')
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqChip;
 END busquedaChip_Per;
 
FUNCTION busquedaEstado_Enc(pEstado IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqEstado TYPES.ref_c;
  BEGIN
    OPEN busqEstado FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc
    FROM MASCOTA_ENCONTRADA C, DIRECCION D
    WHERE C.ID_MASCOTA_enc = D.ID_DIRECCION and C.ESTADO_enc like CONCAT(pEstado, '%')
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqEstado;
 END busquedaEstado_Enc;
 
 FUNCTION busquedaEstado_Per(pEstado IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqEstado TYPES.ref_c;
  BEGIN
    OPEN busqEstado FOR
    SELECT C.NOMBRE_per,C.ESTADO_per,D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per
    FROM Mascota_Perdida C, DIRECCION D
    WHERE C.ID_MASCOTA_per = D.ID_DIRECCION and C.ESTADO_per like CONCAT(pEstado, '%')
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqEstado;
 END busquedaEstado_Per;


FUNCTION busquedaTipo_Enc(pTipo IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqTipo TYPES.ref_c;
  BEGIN
    OPEN busqTipo FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc, R.DESCRIPCION_RAZA, R.TIPO_MASCOTA, D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc
    FROM Mascota_Encontrada C, DIRECCION D, RAZA R
    WHERE R.TIPO_MASCOTA  like CONCAT(pTipo, '%') and c.tipo_y_raza_enc = r.id_raza and c.id_mascota_enc = d.id_direccion
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqTipo;
 END busquedaTipo_Enc;
 
FUNCTION busquedaTipo_Per(pTipo IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqTipo TYPES.ref_c;
  BEGIN
    OPEN busqTipo FOR
    SELECT C.NOMBRE_per,C.ESTADO_per, R.DESCRIPCION_RAZA, R.TIPO_MASCOTA, D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per
    FROM Mascota_Perdida C, DIRECCION D, RAZA R
    WHERE R.TIPO_MASCOTA  like CONCAT(pTipo, '%') and c.tipo_y_raza_per = r.id_raza and c.id_mascota_per = d.id_direccion
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqTipo;
 END busquedaTipo_Per;

FUNCTION busquedaRaza_Enc(pRaza IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqRaza TYPES.ref_c;
  BEGIN
    OPEN busqRaza FOR
    SELECT C.NOMBRE_enc,C.ESTADO_enc, R.DESCRIPCION_RAZA, R.TIPO_MASCOTA, D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_enc
    FROM Mascota_Encontrada C, DIRECCION D, RAZA R
    WHERE R.DESCRIPCION_RAZA like CONCAT(pRaza, '%') and c.tipo_y_raza_enc = r.id_raza and c.id_mascota_enc = d.id_direccion
    ORDER BY C.FECHA_INGRESO_enc DESC;
    RETURN busqRaza;
 END busquedaRaza_Enc;
 
FUNCTION busquedaRaza_Per(pRaza IN VARCHAR2)
  RETURN TYPES.ref_c
  AS busqRaza TYPES.ref_c;
  BEGIN
    OPEN busqRaza FOR
    SELECT C.NOMBRE_per,C.ESTADO_per, R.DESCRIPCION_RAZA, R.TIPO_MASCOTA, D.PAIS,D.PROVINCIA,D.CANTON,D.DISTRITO,D.DIRECCION_EXACTA, C.FECHA_INGRESO_per
    FROM Mascota_Perdida C, DIRECCION D, RAZA R
    WHERE R.DESCRIPCION_RAZA like CONCAT(pRaza, '%') and c.tipo_y_raza_per = r.id_raza and c.id_mascota_per = d.id_direccion
    ORDER BY C.FECHA_INGRESO_per DESC;
    RETURN busqRaza;
 END busquedaRaza_Per;
END BUSQUEDAS;
