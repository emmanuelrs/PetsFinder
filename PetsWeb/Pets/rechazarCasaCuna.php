<?php
// Start the session
session_start();

$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$id = $_SESSION['IDCASA'];

$stid = oci_parse($conn, "BEGIN fun_administrador.denegar_casa_cuna(:busq); END;");
oci_bind_by_name($stid,':busq', $id);
oci_execute($stid);
oci_free_statement($stid);
oci_close($conn);
header('refresh:0; url=admin casa cuna.php');

?>