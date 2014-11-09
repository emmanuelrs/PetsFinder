create or replace procedure intervaloMatchMinutos(pTiempo number)
as

BEGIN
       DBMS_SCHEDULER.SET_ATTRIBUTE (
       name => 'jobMatch',
       attribute => 'FREQ = minutely; INTERVAL = '||pTiempo||'',
       value => 'FREQ = minutely');
END;
