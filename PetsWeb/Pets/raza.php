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
<div></div><div></div>
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
</div>
</head>
<body>
<header>
 <div class="sticky-nav">
    <div class="span">
    <img src="_include/img/work/logo.png" width="180" height="90">
</div>
        <a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        <nav id="menu">
            <ul id="menu-nav">
                <li class="current"><a href="index activo.php" class = "external">Inicio</a></li
          ></ul>
      </nav>
        
    </div>
</header>
 <div class="span1">
          <form id="contact-form" class="contact-form" action="bus-raza.php" method="POST">

          <br></br>
               <select name="Raza">
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
                <input type="submit" value="Enviar" class="boton">  
             
                </form>  
  </div>              
</body>
</html>
