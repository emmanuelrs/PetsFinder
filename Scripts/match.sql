SELECT E.TAMANO_ENC, E.COLOR_ENC, R.descripcion_raza, D.PROVINCIA, D.CANTON, D.DIRECCION_EXACTA, EM.VALOR_EMAIL, T.TELEFONO, U.TIPO
FROM MASCOTA_PERDIDA P, MASCOTA_ENCONTRADA E, RAZA R, DIRECCION D, EMAIL EM, TELEFONO T, USUARIO U
WHERE P.TAMANO_PER = E.TAMANO_ENC 
      AND P.TIPO_Y_RAZA_PER = E.TIPO_Y_RAZA_ENC 
      AND p.COLOR_PER = E.COLOR_ENC  
      AND P.TIPO_Y_RAZA_PER= R.ID_RAZA
      AND E.TIPO_Y_RAZA_ENC = R.ID_RAZA
      AND E.USUARIO_REGISTRA_ENC = D.ID_DIRECCION
      AND E.USUARIO_REGISTRA_ENC = EM.ID_EMAIL
      AND E.USUARIO_REGISTRA_ENC = T.ID_TEL
      AND D.TIPO_DIREC = U.TIPO
      AND EM.TIPO_EMAIL = U.TIPO
      AND T.TIPO_TEL = U.TIPO
      
      
select * from usuario
