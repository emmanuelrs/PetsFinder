<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>PetsFinder Costa Rica</title>   

<meta name="description" content="Busca y encuentra tus mascotas" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">
<link href="_include/css/estImpresion.css" rel="stylesheet">


</head>
<header>
<div class="sticky-nav">
<div class="span">
<img src="_include/img/work/logo.png" width="180" height="90">
</div>
<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
<nav id="menu">
<ul id="menu-nav">
<li class="current"><a href="index activo.php" class = "external">Inicio</a></li>
</ul>
</nav>     
</div>
<form enctype="multipart/form-data" action="calificarPer.php" method="POST">'
<p class="contact-email">
<input id="contact_email" type="text" placeholder="Id usuario" value="" name="id_user" />
  </p>
  <select name="calificacion">
   				<option selected value="0"> Selecione su Calificacion/option>
      			<option value="1">1</option>
      			<option value="2">2</option>
      			<option value="3">3</option>
      			<option value="4">4</option>
      			<option value="5">5</option>
     </option>
     </select>
<input type="submit" value="Calificar" />
</form>
</header>
</body>
</html>

<?php

$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
$idusuario = $_SESSION['NU'];
$division = '';
$query_procedimiento = oci_parse($conn, "BEGIN :cursor := consultas.distinto(:busq); END;");  
$cursor = oci_new_cursor($conn);
oci_bind_by_name($query_procedimiento,':busq', $idusuario);
oci_bind_by_name($query_procedimiento,':cursor', $cursor , -1, OCI_B_CURSOR);
oci_execute($query_procedimiento);
oci_execute($cursor, OCI_DEFAULT);
oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
foreach ($array as $fila) {
   $division = $division .' <div id="general"> ID del usuario: '.$fila['ID_USUARIO'].'
  <br></br>Nombre: '.$fila['NOMBRE'].'<br></br> Apellido: '.$fila['APELLIDO1'].'<br></br> Calificación: '.$fila['CALIFICACION'].'<br></br><br></br>'
  ."<br></br><br></br> ";}
echo $division;
?>

