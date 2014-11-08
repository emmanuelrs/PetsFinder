<?php
// Start the session
session_start();
?>

<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

	$var1 = $_POST['tamaño'];  
	$var2 = $_POST['alimento'];
	$var3 = $_POST['raza'];
    $user = $_SESSION["NU"];
    $var4 = $user;

$stid = ociparse($conn, "BEGIN fun_administrador.solicitud_casa_cuna(:p1,:p2,:p3,:p4); END;");
oci_bind_by_name($stid, ':p1', $var4);
oci_bind_by_name($stid, ':p2', $var1);
oci_bind_by_name($stid, ':p3', $var3);
oci_bind_by_name($stid, ':p4', $var2);
oci_execute($stid);
oci_free_statement($stid);
oci_close($conn);

header('refresh:0; url=index activo.php');

?> 