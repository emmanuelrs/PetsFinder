<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$provincia = $_POST['busqueda'];
$tipo = $_POST['tipoBusqueda'];	
$division = '';


 if($tipo == "Encontrada"){
        
    $query_procedimiento = oci_parse($conn, "BEGIN :cursor := busquedas.busquedaprovincia_enc(:busq); END;");  
	$cursor = oci_new_cursor($conn);
	oci_bind_by_name($query_procedimiento,':busq', $provincia);
	oci_bind_by_name($query_procedimiento,':cursor', $cursor , -1, OCI_B_CURSOR);
	oci_execute($query_procedimiento);
	oci_execute($cursor, OCI_DEFAULT);
	oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
	foreach ($array as $fila) {
		$division =  $division."<br></br>Nombre de la mascota: ".$fila['NOMBRE_ENC']."<br></br> País: ".$fila['PAIS']."<br></br> Canton: ".$fila['CANTON']
		."<br></br> Distrito: ".$fila['DISTRITO']. "<br></br> Dirección: ".$fila['DIRECCION_EXACTA']."<br></br> Fecha de perdida: ".$fila['FECHA_INGRESO_ENC'];}
echo $division;
        
}else if($tipo == "Perdida"){
        
    $query_procedimiento = oci_parse($conn, "BEGIN :cursor := busquedas.busquedaprovincia_per(:busq); END;");
    $cursor = oci_new_cursor($conn);
	oci_bind_by_name($query_procedimiento,':busq', $provincia);
	oci_bind_by_name($query_procedimiento,':cursor', $cursor , -1, OCI_B_CURSOR);
	oci_execute($query_procedimiento);
	oci_execute($cursor, OCI_DEFAULT);
	oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
	foreach ($array as $fila) {

		 $division = $division .' <div id="general"> <div id="foticas"> <img src = "C:\xampp\htdocs\PetsFinder\PetsWeb\Pets\img'.$fila['NOMBRE_IMG'].'"'.'width=300px height = 350px></div>
	     <br></br>Nombre de la mascota: '.$fila['NOMBRE_PER']."<br></br> País: ".$fila['PAIS']."<br></br> Canton: ".$fila['CANTON']
		."<br></br> Distrito: ".$fila['DISTRITO']. "<br></br> Dirección: ".$fila['DIRECCION_EXACTA']."<br></br> Fecha de perdida: ".$fila['FECHA_INGRESO_PER'];}


		//$division =  $division."<br></br>Nombre de la mascota: ".$fila['NOMBRE_PER']."<br></br> País: ".$fila['PAIS']."<br></br> Canton: ".$fila['CANTON']
		//."<br></br> Distrito: ".$fila['DISTRITO']. "<br></br> Dirección: ".$fila['DIRECCION_EXACTA']."<br></br> Fecha de perdida: ".$fila['FECHA_INGRESO_PER'];}
echo $division;
echo '<img src = "C:\xampp\htdocs\PetsFinder\PetsWeb\Pets\img\sharik.jpg">';
             
}





?>