CREATE OR REPLACE PACKAGE BUSQUEDAS AS

FUNCTION busquedaProvincia(pProvincia IN varchar2) return TYPES.ref_c;
FUNCTION busquedaCanton(pCanton IN varchar2) return TYPES.ref_c;
FUNCTION BusquedaDistrito(pDistrito IN VARCHAR2) Return TYPES.ref_c;
FUNCTION busquedaChip(pChip IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaEstado(pEstado IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaTipo(pTipo IN VARCHAR2) RETURN TYPES.ref_c;
FUNCTION busquedaRaza(pRaza IN VARCHAR2) RETURN TYPES.ref_c;
END BUSQUEDAS;
