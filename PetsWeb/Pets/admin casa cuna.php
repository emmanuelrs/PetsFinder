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
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1002;
}
#apDiv2 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1002;
	left: 1156px;
	top: 62px;
}
</style>

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
function ver(num) {
  document.getElementById('uno').style.display = (num==0) ? 'block' : 'none'; 
  document.getElementById('dos').style.display = (num==1) ? 'block' : 'none'; 
}
</script>
<!-- End Analytics -->

</head>

<header>
 <div class="sticky-nav">
    <div class="span">
    <img src="_include/img/work/logo.png" width="180" height="90">
</div>
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        <nav id="menu">
            <ul id="menu-nav">
                <li class="current"><a href="index activo admin.php" class = "external">Inicio</a></li>
          </ul>
      </nav>     
    </div>
</header>
<h1>Solicitudes</h1>
<br></br>
    	<div class="span">       
        	<form id="contact-form" class="contact-form" action="registrar_usuario.php" method = 'POST'>

            </form>
<div id="apDiv2">
<img src="_include/img/work/pensando.png" width="350" height="350"> </div>

</body>
</html>
<?php
$conn = oci_connect('AD', 'ad', 'PETS','AL32UTF8');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$division = "";
$query_procedimiento = oci_parse($conn, "BEGIN :cursor := fun_administrador.casa_cuna_pen; END;");  
$cursor = oci_new_cursor($conn);
oci_bind_by_name($query_procedimiento,':cursor', $cursor , -1, OCI_B_CURSOR);
oci_execute($query_procedimiento);
oci_execute($cursor, OCI_DEFAULT);
oci_fetch_all($cursor, $array, null, null, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
foreach ($array as $fila) {
    $division = $division .' <div></div><div id="general"><br></br> Nombre: '.$fila['NOMBRE'].'<br></br> Apellido: '.$fila['APELLIDO1'].'<br></br> Calificación: '
    .$fila['CALIFICACION']."<br></br> Tamaño de las mascota que acepta: ".$fila['TAMANO']."<br></br> Requiere Alimento: ".$fila['REQUIERE_ALIMENTO'].
    "<br></br> Descripción de la raza: ".$fila['DESCRIPCION_RAZA']."<br></br> Tipo de Mascota: ".$fila['TIPO_MASCOTA'].
    '<br></br><a href="aceptarCasaCuna.php"> <span>Aceptar</span></a></li> '.
    '<a href="rechazarCasaCuna.php"> <span>Rechazar</span></a></li><br></br><br></br>';}
if($fila['ID_CASA_CUNA']){
    $_SESSION['IDCASA'] = $fila['ID_CASA_CUNA'];
}else{
  $_SESSION['IDCASA'] = '';}

echo $division;

?>


