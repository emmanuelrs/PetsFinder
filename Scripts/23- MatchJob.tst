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
  job_action => 'BEGIN matc.match2; END;',
  start_date => SYSTIMESTAMP,
  repeat_interval => 'freq=hourly; interval=1',
  end_date => NULL,
  enabled => TRUE,
  comments => 'Job del match');
end;
0
0
