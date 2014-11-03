<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]--><head>

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
<!-- End Analytics -->

<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.7.2.custom.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
jQuery(function($){
$.datepicker.regional['es'] = {
closeText: 'Cerrar',
prevText: '&#x3c;Ant',
nextText: 'Sig&#x3e;',
currentText: 'Hoy',
monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
'Jul','Ago','Sep','Oct','Nov','Dic'],
dayNames: ['Domingo','Lunes','Martes','Mi&eacute;rcoles','Jueves','Viernes','S&aacute;bado'],
dayNamesShort: ['Dom','Lun','Mar','Mi&eacute;','Juv','Vie','S&aacute;b'],
dayNamesMin: [' D ',' L ',' K ',' M ',' J ',' V ',' S '],
weekHeader: 'Sm',
dateFormat: 'dd/mm/yy',
firstDay: 1,
isRTL: false,
showMonthAfterYear: false,
yearSuffix: ''};
$.datepicker.setDefaults($.datepicker.regional['es']);
});    
 
$(document).ready(function() {
   $("#datepicker").datepicker();
});
</script>

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
              </nav >  
    
        <div class="row">
    	<div class="span9">
        <form enctype="multipart/form-data" action="registrar_mascota.php" method="POST" class="contact-form" id="contact-form">
        Fotografía de la mascota: <input name="uploadedfile" type="file"/><br></br>
        	<form id="contact-form" class="contact-form" action="registrar_mascota.php" method="POST">

            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Nombre de la mascota" value="" name="nombre" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Chip identificación" value="" name="chip" />
                </p>
                 <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Color" value="" name="color" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Distrito" value="" name="distrito" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Detalles de la Dirrecion" value="" name="detalle_direccion" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Recompenza" value="" name="recompenza" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Descripción de la mascota" value="" name="descripcion" />
                </p>

                <select name="raza">
      	        <option selected value="0"> Seleccione la raza</option>
       		    <optgroup label="Perros">
      		    <option value="Salchicha">Salchicha</option>
     	        <option value="Gran Danes">Gran Danés</option>
                <option value="Raza Unica">Raza Única</option>
                <optgroup label="Gatos">
      		    <option value="Angora">Angora</option>
     		    <option value="Raza Unica">Raza Única</option>
   				</optgroup>
				</select>

                <select name="estado">
   				<option selected value="0"> Estado de su mascota</option>
      			<option value="Perdida">Perdida</option>
     			<option value="Encontrada">Encontrada</option>
                <option value="Adoptada">Adoptada</option>

				</select>
                <select name="tamaño">
                <option selected value="0"> Tamaño</option>
                <option value="grande">Grande</option>
                <option value="mediano">Mediana</option>
                <option value="pequeña">Pequeña</option>
                </select>

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
                </select>
                
                <p class="contact-email">
                <input id="contact_email" type="text" placeholder="Distrito..." value="" name="distrito" />
                </p>
                <p class="contact-message">
                <input name="message" type="text" id="contact_message" placeholder="Descripcion detallada de la dirección" value=	"" size="25">
                </p>
            

                <p class="contact-submit">
                <label> Seleccionar Fecha:</label>
                <input type="text" name="datepicker" id="datepicker" readonly="readonly" size="20" placeholder="Click aquí para seleccionar fecha..."/> 
                <input type="submit" value="Enviar" class="boton">
                </p>   
        	   

                </form>
            
            
</body>
</html>

