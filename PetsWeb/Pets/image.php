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
	$var1 = $_POST['id_tupla'];  

/*
   echo($var1);
   echo($imagen);
*/

    if($var1 && $imagen ){

        $stid = ociparse($conn, "BEGIN  insertions.SET_IMAGEN_ADOP(:p1,:p2); END;");
        oci_bind_by_name($stid, ':p1', $var1);
        oci_bind_by_name($stid, ':p2', $imagen);
        oci_execute($stid);
        oci_free_statement($stid);
        oci_close($conn);
        ?>
        <script>
        alert("Imagen cargada correctamente :)");
        </script>
        <?php
        header('refresh:0; url=mis adopciones.php');
    }else{
        ?>
        <script>
        alert("Error: SError: Su imagen NO fue cargada correctamente :(");
        </script>
        <?php
        header('refresh:0; url=mis adopciones.php');
    }
?> 
