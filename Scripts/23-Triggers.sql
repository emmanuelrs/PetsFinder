CREATE OR REPLACE TRIGGER before_insert_mascota_en
 BEFORE INSERT OR UPDATE
 ON ad.mascota_encontrada for each row
 BEGIN
   :new.fecha_ultima_mod := SYSDATE;
   :new.usuario_ultima_mod := USER;
 END;
