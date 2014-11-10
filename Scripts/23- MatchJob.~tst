PL/SQL Developer Test script 3.0
16
-- Created on 10/15/2014 by EMMANUELROSALES 
declare 
  -- Local variables here
  i integer;
begin
  -- Test statements here
  DBMS_SCHEDULER.create_job (
  job_name => 'MATCH',
  job_type => 'PLSQL_BLOCK',
  job_action => 'BEGIN consultas.match2; END;',
  start_date => SYSTIMESTAMP,
  repeat_interval => 'freq=daily; byhour=1,5,9,13,17,21; byminute=0; bysecond=0',
  end_date => NULL,
  enabled => TRUE,
  comments => 'Job del match');
end;
0
0
