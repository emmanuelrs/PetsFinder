CREATE OR REPLACE PACKAGE BUSQUEDAS AS

FUNCTION busquedaProvincia_Enc(pProvincia IN varchar2) return TYPES.ref_c;
FUNCTION busquedaProvincia_Per(pProvincia IN varchar2) return TYPES.ref_c;
FUNCTION busquedaCanton_Enc(pCanton IN varchar2) return TYPES.ref_c;
FUNCTION busquedaCanton_Per(pCanton IN varchar2) return TYPES.ref_c;
FUNCTION BusquedaDistrito_Enc(pDistrito IN VARCHAR2) Return TYPES.ref_c;
FUNCTION BusquedaDistrito_Per(pDistrito IN VARCHAR2) Return TYPES.ref_c;
FUNCTION busquedaChip_Enc(pChip IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaChip_Per(pChip IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaEstado_Enc(pEstado IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaEstado_Per(pEstado IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaTipo_Enc(pTipo IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaTipo_Per(pTipo IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaRaza_Enc(pRaza IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaRaza_Per(pRaza IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaRaza_Adop(pRaza IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busqueda_adopciones RETURN TYPES.ref_c;
FUNCTION Mis_mascotas_per(id_usuario in varchar2) RETURN TYPES.ref_c;
FUNCTION Coincidencias(id_perdida in varchar2) RETURN TYPES.ref_c;
END BUSQUEDAS;
