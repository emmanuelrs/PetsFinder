PL/SQL Developer Test script 3.0
30
begin
  -- Call the procedure
  
  insertions.set_usuario(nom => 'Luis',
                         papellido => 'Serrano',
                         sapellido => 'Sánchez',
                         nomusr => 'lserrano',
                         contra => '123queso',
                         tel => '83207600',
                         email => 'lserrano@mail.com',
                         pais1 => 'Costa Rica',
                         provincia1 => 'Cartago',
                         canton1 => 'Paraiso',
                         distrito1 => 'Santiago',
                         direc_exact => 'Costado este de la plaza de deportes');
  
                         
  insertions.set_usuario(nom => 'Emmanuel',
                         papellido => 'Rosales',
                         sapellido => 'Salas',
                         nomusr => 'miu',
                         contra => 'nachi',
                         tel => '85784125',
                         email => 'emmars@mail.com',
                         pais1 => 'Costa Rica',
                         provincia1 => 'Alajuela',
                         canton1 => 'Atenas',
                         distrito1 => 'chuta',
                         direc_exact => 'no recuerdo');
end;
12
nom
0
-5
papellido
0
-5
sapellido
0
-5
nomusr
0
-5
contra
0
-5
tel
0
-5
email
0
-5
pais1
0
-5
provincia1
0
-5
canton1
0
-5
distrito1
0
-5
direc_exact
0
-5
0
