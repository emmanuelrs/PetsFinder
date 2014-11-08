CREATE OR REPLACE PACKAGE BUSQUEDAS AS

FUNCTION busquedaProvincia(pProvincia IN varchar2) return TYPES.ref_c;
FUNCTION busquedaCanton(pCanton IN varchar2) return TYPES.ref_c;
FUNCTION BusquedaDistrito(pDistrito IN VARCHAR2) Return TYPES.ref_c;
FUNCTION busquedaChip_Enc(pChip IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaChip_Per(pChip IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaEstado_Enc(pEstado IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaEstado_Per(pEstado IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaTipo_Enc(pTipo IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaTipo_Per(pTipo IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaRaza_Enc(pRaza IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaRaza_Per(pRaza IN VARCHAR2) RETURN TYPES.ref_c;
END BUSQUEDAS;
