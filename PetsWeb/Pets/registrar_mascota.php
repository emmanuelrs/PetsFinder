<?php
session_start();
?>

<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

    $target_path = basename($_FILES['uploadedfile']['name']); 
    $imagen = (string)$target_path;
	$var1 = $_POST['nombre'];  
	$var2 = $_POST['raza'];
	$var3 = $_POST['tamaño'];
	$var5 = $_POST['chip'];
	$var6 = $_POST['color'];
	$var7 = $_POST['estado'];
	$var8 = 'Costa Rica';
	$var9 = $_POST['Provincia'];
	$var10 = $_POST['Canton'];
	$var11 = $_POST['distrito'];
	$var12 = $_POST['descripcion'];
	$var13 = $_POST['recompenza'];
	$var14 = $_POST['detalle_direccion'];
    $var15 = $_POST['datepicker'];
    $fecha = (string)$var15;
    $user = $_SESSION["NU"];
    $var16 = $user;

    echo($var1);
    echo($var2);
    echo($var3);
    echo($imagen);
    echo($var5);
    echo($var6);
    echo($var7);
    echo($var8);
    echo($var9);
    echo($var10);
    echo($var11);
    echo($var12);
    echo($var13);
    echo($var14);
    echo($var15);
    echo($var16);

	if($var7 == "Encontrada"){
        
        $stid = ociparse($conn, "BEGIN  insertions.set_mascota_encontrada(:p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15,:p16); END;");
        
    }
    else if($var7 == "Perdida"){
        
        $stid = ociparse($conn, "BEGIN insertions.set_mascota_perdida(:p1,:p2,:p3,:p4,:p5,:p6,:p7,:p8,:p9,:p10,:p11,:p12,:p13,:p14,:p15,:p16); END;");
      
    }

    if($var1 && $var2 && $var3 && $var5 && $var6 && $var7 && $var8 && $var9
        && $var9 && $var10 && $var11 && $var12 && $var13 && $var14 && $var15 && $var16){

        oci_bind_by_name($stid, ':p1', $var1);
        oci_bind_by_name($stid, ':p2', $var2);
        oci_bind_by_name($stid, ':p3', $var3);
        oci_bind_by_name($stid, ':p4', $imagen);
        oci_bind_by_name($stid, ':p5', $var5);
        oci_bind_by_name($stid, ':p6', $var6);
        oci_bind_by_name($stid, ':p7', $var7);
        oci_bind_by_name($stid, ':p8', $var8);
        oci_bind_by_name($stid, ':p9', $var9);
        oci_bind_by_name($stid, ':p10', $var10);
        oci_bind_by_name($stid, ':p11', $var11);
        oci_bind_by_name($stid, ':p12', $var12);
        oci_bind_by_name($stid, ':p13', $var13);
        oci_bind_by_name($stid, ':p14', $var14);
        oci_bind_by_name($stid, ':p15', $fecha);
        oci_bind_by_name($stid, ':p16', $var16);
        oci_execute($stid);
        oci_free_statement($stid);
        oci_close($conn);
        ?>
        <script>
        alert("Su mascota fue registrada correctamente :)");
        </script>
        <?php
        header('refresh:0; url=index activo.php');
    }else{
        ?>
        <script>
        alert("Error: Su mascota NO fue registrada debe de llenar todos los campos");
        </script>
        <?php
        header('refresh:0; url=registrarMascota.php');
    }
?> 
