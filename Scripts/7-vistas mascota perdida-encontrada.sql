create view mascotas_perdidas as
  select * from mascota
  where mascota.estado = 'Perdido';
  
create view mascotas_encontradas as
  select * from mascota
  where mascota.estado = 'Encontrado';
