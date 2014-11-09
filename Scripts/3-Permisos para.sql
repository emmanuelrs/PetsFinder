--PARMISOS PARA ADMINISTRADOR

grant create any view to AD; 
grant create public synonym to AD;
GRANT CREATE PROCEDURE TO AD;
GRANT UNLIMITED TABLESPACE TO AD;
GRANT CREATE ANY TABLE TO AD;
GRANT CREATE ANY SEQUENCE TO AD;
GRANT INSERT ANY TABLE TO AD;
GRANT CREATE PUBLIC SYNONYM TO AD;
grant create any trigger to AD;
grant create any job to AD;

grant create any directory to AD;
create or replace directory DIRECTORIO as 'C:\xampp\htdocs\PetsFinder\PetsWeb\Pets\img'; -- cambiar directorio para las imagenes ;
GRANT READ ON DIRECTORY Directorio to AD;
GRANT CREATE ANY INDEX TO AD;



