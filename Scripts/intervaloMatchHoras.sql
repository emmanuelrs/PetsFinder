create or replace procedure intervaloMatchHoras(pTiempo number)
as

BEGIN
       DBMS_SCHEDULER.SET_ATTRIBUTE (
       name => 'jobMatch',
       attribute => 'FREQ = HOURLY; INTERVAL = '||pTiempo||'',
       value => 'FREQ = hourly');
END;
