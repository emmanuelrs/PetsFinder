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
<header>
 <div class="sticky-nav">
    <div class="span">
    <img src="_include/img/work/logo.png" width="180" height="90">
</div>
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        <nav id="menu">
            <ul id="menu-nav">
                <li class="current"><a href="index.php" class = "external">Inicio</a></li>
                <li><a href="registrarPersona.php" class = "external">Registrar persona</a></li>
                <li><a href="sesion.php" class="external">Iniciar Sesión</a></li>
          </ul>
      </nav>     
    </div>
</header>

<br></br>
    	<div class="span">       
        	<form id="contact-form" class="contact-form" action="registrar_usuario.php" method = 'POST'>

            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Nombre" value="" name="nombre" />
                </p>
                <p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Primer apellido" value="" name="apellido1" />
                </p>
                <p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Segundo apellido" value="" name="apellido2" />
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
                <p class="contact-email">
                 <select name="Provincia">
                <option selected value="0"> Provincia </option>
                <option value="San José">San José</option>
                <option value="Alajuela">Alajuela</option>
                <option value="Heredia">Heredia</option>
                <option value="Cartago">Cartago</option>
                <option value="Puntarenas">Puntarenas</option>
                <option value="Guanacaste">Guanacaste</option>
                <option value="Limón">Limón</option>
                </select>
                <select name="Canton">
                <option selected value="0">Cantón</option>
                <optgroup label="San José">
                <option value="SanJose">San José</option>
                <option value="Escazu">Escazú</option>
                <option value="Desamparados">Desamparados</option>
                <option value="Puriscal">Puriscal</option>
                <option value="Tarrazú">Tarrazú</option>
                <option value="Aserrí">Aserrí</option>
                <option value="Moravia">Moravia</option>
                <option value="Ciudad Colón">Ciudad Colón</option>
                <option value="Goicoechea">Goicoechea</option>
                <option value="Santa Ana">Santa Ana</option>
                <option value="Alajuelita">Alajuelita</option>
                <option value="Vázque de Coronado">Vázque de Coronado</option>
                <option value="Acosta">Acosta</option>
                <option value="Tibás">Tibás</option>
                <option value="Montes de Oca">Montes de Oca</option>
                <option value="Turrubares">Turrubares</option>
                <option value="Dota">Dota</option>
                <option value="Curridabat">Curridabat</option>
                <option value="Pérez Zeledón">Pérez Zeledón</option>
                <option value="León Cortés">León Cortés</option>

                <optgroup label="Alajuela">
                <option value="Alajuela">Alajuela</option>
                <option value="Atenas">Atenas</option>
                <option value="Grecia">Grecia</option>
                <option value="Guatuso">Guatuso</option>
                <option value="Los Chiles">Los Chiles</option>
                <option value="Naranjo">Naranjo</option>
                <option value="Orotina">Orotina</option>
                <option value="Palmares">Palmares</option>
                <option value="Poás">Poás</option>
                <option value="San Carlos">San Carlos</option>
                <option value="San Mateo">San Mateo</option>
                <option value="San Ramón">San Ramón</option>
                <option value="Upala">Upala</option>
                <option value="Valverde Vega">Valverde Vega</option>
                <option value="Zarcero">Zarcero</option>

                <optgroup label="Heredia">
                <option value="Barva">Barva</option> 
                <option value="Belén">Belén</option>
                <option value="Flores">Flores</option>
                <option value="Heredia">Heredia</option>
                <option value="Santa Bárbara">Santa Bárbara</option>
                <option value="Santo Domingo">Santo Domingo</option>
                <option value="San Isidro">San Isidro</option>
                <option value="San Pablo">San Pablo</option>
                <option value="San Rafael">San Rafael</option>
                <option value="Sarapiquí">Sarapiquí</option>
                

                <optgroup label="Cartago">
                <option value="Alvarado">Alvarado</option>
                <option value="Cartago">Cartago</option>
                <option value="El Guarco">El Guarco</option>
                <option value="Jiménez">Jiménez"</option>
                <option value="La Unión">La Unión</option>
                <option value="Oreamuno">Oreamuno</option>
                <option value="Paraiso">Paraiso</option>
                <option value="Turrialba">Turrialba</option>

                <optgroup label="Puntarenas">
                <option value="Aguirre">Aguirre</option>
                <option value="Buenos Aires">Buenos Aires</option>
                <option value="Corredores">Corredores</option>
                <option value="Coto Brus">Coto Brus</option>
                <option value="Esparza">Esparza</option>
                <option value="Garabito">Garabito</option>
                <option value="Golfito">Golfito</option>
                <option value="Montes de Oro">Montes de Oro</option>
                <option value="Osa">Osa</option>
                <option value="Parrita">Parrita</option>
                <option value="Puntarenas">Puntarenas</option>


                <optgroup label="Guanacaste">
                <option value="Abangares">Abangares</option>
                <option value="Bagaces">Bagaces</option>
                <option value="Carrillo">Carrillo</option>
                <option value="Cañas">Cañas</option>
                <option value="Hojancha">Hojancha</option>
                <option value="La Cruz">La Cruz</option>
                <option value="Liberia">Liberia</option>
                <option value="Nandayure">Nandayure</option>
                <option value="Santa Cruz">Santa Cruz</option>
                <option value="Tilarán">Tilarán</option>

                <optgroup label="Limón">
                <option value="Guácimo">Guácimo</option>
                <option value="Limón">Limón</option>
                <option value="Matina">Matina</option>
                <option value="Pococí">Pococí</option>
                <option value="Siquirres">Siquirres</option>
                <option value="Talamanca">Talamanca</option>

                </optgroup>
                </p>

                <p class="contact-email">
                    <input id="contact_email" type="text" placeholder="Distrito" value="" name="distrito" />
                </p>
                
                 <p class="contact-email">
                    <input id="contact_email" type="text" placeholder="Direccion Exacta" value="" name="direc" />
                </p>
                <p class="contact-submit">
                	<a href = "registrarPersona.php"><input type="submit" value="Enviar" class="boton"><a/>
                </p>     
                </div>

</body>
</html>