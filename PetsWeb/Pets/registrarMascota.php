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
        </nav>  
    </div>
       <div class="row">
    	<div class="span9">
        
        	<form id="contact-form" class="contact-form" action="registrar_mascota.php" method="POST">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Nombre mascota" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Chip identificacion" value="" name="chip" />
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
                	<input id="contact_email" type="text" placeholder="Descripcion de la mascota" value="" name="descripcion" />
                </p>
                <select name="raza">
   				<option selected value="0"> seleccione la raza de su mascota </option>
       			<optgroup label="Perros">
      			<option value="Salchicha">Salchicha</option>
     			<option value="Gran Danes">Gran Danes</option>
                <option value="Raza Unica">Raza Unica</option>
                <optgroup label="Gatos">
      			<option value="Angora">Angora</option>
     			<option value="Raza Unica">Raza Unica</option>
   				</optgroup>
				</select>

                <select name="direccion">
   				<option selected value="0"> Estado de su mascota</option>
      			<option value="Perdido">Perdido</option>
     			<option value="Encontrado">Encontrado</option>
                <option value="Encontrado">Adoptado</option>
                <option value="Otra">Otra</option>
				</select>
                
                <p class="contact-message">
                  <input name="message" type="text" id="contact_message" placeholder="Descripcion detallada de la mascota" value=	"" size="25">
                </p>
                <p class="contact-submit">
                	<a href = "registrar_mascota.php"><input type="submit" value="Enviar" class="boton"><a/>
                </p>     
                </div>
          <div class="row"> 
        <select name="provincia" id="lstStuff" multiple="multiple" onChange="lstStuff_OnChange()" size="3" style="width: 200px; margin: 90 px auto;">
			<option>San José</option>
			<option>Cartago</option>
			<option>Alajuela</option>
			<option>Heredia</option>
			<option>Guanacaste</option>
			<option>Puntarenas</option>		
			<option>Limón</option>		
		</select>	
		
		<p/>
		<select id="lstOtherStuff" multiple="multiple" size="3" style="width:200px;">
		</select>
	</form>
	<script type="text/javascript" charset="utf-8">
		var otherStuff = {
			"San José" : ["San José", "Escazú", "Desamparados", "Puriscal", "Tarrazú", "Aserrí", "Mora, Colón", "Goicoechea", "Santa Ana", "Alajuelita", "Vázque de Coronado", "Acosta", "Tibás", "Moravia", "Montes de Oca", "Turrubares", "Dota", "Curridabat", "Pérez Zeledón", "León Cortés"],
			"Cartago" : ["Cartago", "Paraiso", "La Unión", "Jiménez", "Turrialba", "Alvarado", "Oreamuno", "El Guarco"],
			"Alajuela" : ["Alajuela", "San Ramón", "Grecia", "San Mateo", "Atenas", "Naranjo", "Palmares", "Poás", "Orotina", "San Carlos", "Zarcero", "Valverde Vega","Upala", "Los Chiles", "Guatuso"],
			"Heredia" : ["Heredia", "Barva", "Santo Domingo", "Santa Bárbara", "San Rafael", "San Isidro", "Belén", "Flores", "San Pablo", "Sarapiquí"],
			"Guanacaste" : ["Liberia", "Nicoya", "Santa Cruz", "Bagaces", "Carrillo", "Cañas", "Abangares", "Tilarán", "Nandayure", "La Cruz", "Hojancha",],
			"Puntarenas" : ["Puntarenas", "Esparza", "Buenos Aires", "Montes de Oro", "Osa", "Aguirre", "Golfito", "Coto Brus", "Parrita", "Corredores", "Garabito"],
			"Limón" : ["Limón", "Pococí", "Siquirres", "Talamanca", "Matina", "Guácimo"]
		};

	</script>
	<script type="text/javascript" charset="utf-8">
		function selectAll(listName, selected) {
			var listBox = document.getElementById(listName);
			for(i=0; i<listBox.length; i++) {
				listBox.options[i].selected=selected;
			}
			if( listBox.onchange ) {
				listBox.onchange();
			}
		}
		function lstStuff_OnChange() {
			var listBox = document.getElementById("lstStuff");
			var subListBox = document.getElementById("lstOtherStuff");
			subListBox.options.length=0;
			for(i=0; i<listBox.length; i++) {
				if( listBox.options[i].selected ) {
					var key = listBox.options[i].text;
					if(otherStuff[key]) {
						for(j=0; j<otherStuff[key].length; j++) {
							subListBox.options.add(new Option(otherStuff[key][j],otherStuff[key][j]));
						}
					}
				}
			}
		}
		</script>
        <label> Seleccionar Fecha:</label>
  		<input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12" /> 
        </div> 
         
                
        </form>
</body>
</html>

