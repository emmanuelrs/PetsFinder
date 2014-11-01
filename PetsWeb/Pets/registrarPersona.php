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
<body>
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="index.php" class="external">Inicio</a></li>
                <li><a href="registrarPersona.php" class = "external">Registrar Usuario</a></li>
                <li><a href="sesion.php" class="external">Iniciar Sesión</a></li>
                <li><a href="registrarMascota.php" class="external">Registrar Mascota</a></li>
				<li><a href="shortcodes.php" class="external">Shortcodes</a></li>
            </ul>
        </nav>  
    </div>
    <!-- Contact Form -->
    <div class="row">
    	<div class="span9">
        
        	<form id="contact-form" class="contact-form" action="registrar_usuario.php" method = 'POST'>
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Nombre completo" value="" name="nombre" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Nombre de usuario" value="" name="nombre_usuario" />
                </p>
                 <p class="contact-email">
                	<input id="contact_email" type="password" placeholder="Contraseña" value="" name="contrasena" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="password" placeholder="Confirmar contraseña" value="" name="confirm_contrasena" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Telefono" value="" name="telefono" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Email" value="" name="email" />
                </p>
                <select name="Provincia">
   				<option selected value="0"> Elige su provincia </option>
       			<optgroup label="Provincias">
      			<option value="San José">San José</option>
     			<option value="Alajuela">Alajuela</option>
       			<option value="Cartago">Cartago</option>
                <option value="Heredia">Heredia</option>
                <option value="Limón">Limón</option>
                <option value="Guanacaste">Guanacaste</option>
                <option value="Puntarenas">Puntarenas</option>
   				</optgroup>
				</select>
                
                <select name="Canton">
   				<option selected value="0"> Elige su canton </option>
      			<option value="San José">San José</option>
				</select>
                
                <select name="Distrito">
   				<option selected value="0"> Elige su distrito </option>
      			<option value="San José">San José</option>
				</select>
                
                <p class="contact-message">
                  <input name="message" type="text" id="contact_message" placeholder="Dirección exacta" value="" size="25", name="direccion" >
                </p>
                <p class="contact-submit">
                	<a href = "registrarPersona.php"><input type="submit" value="Enviar" class="boton"><a/>
                </p>     
                </div>
</body>
</html>