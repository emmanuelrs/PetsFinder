CREATE OR REPLACE TRIGGER update_salary
 BEFORE UPDATE OF mascota
 ON ad.bitacota FOR EACH ROW
 BEGIN
   insert into bitacora(
 END;
   
