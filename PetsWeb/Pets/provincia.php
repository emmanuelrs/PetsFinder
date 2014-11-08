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
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1002;
	left: 319px;
	top: 901px;
}
#apDiv2 {
	position: absolute;
	width: 507px;
	height: 354px;
	z-index: 1002;
	left: 134px;
	top: 842px;
}
#apDiv3 {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1002;
	left: 134px;
	top: 859px;
}
</style>

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<script>
            function ajax_post(){
                // Create our XMLHttpRequest object
                var hr = new XMLHttpRequest();
                // Create some variables we need to send to our PHP file
                var url = "bus-provincia.php";

                var busqueda = document.getElementById("pro").value;
                //var tipoBusqueda = document.getElementById("tipoBusqueda").value;

                var vars = '&busqueda=' + busqueda;

                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                    if(hr.readyState == 4 && hr.status == 200) {
                        var return_data = hr.responseText;
                        document.getElementById("resp").innerHTML = return_data;
                    }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("resp").innerHTML = "Procesando...";
            }
</script>


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
    <li class="current"><a href="index activo.php" class = "external">Inicio</a></li></ul>
    </nav>     
    </div>
</header>

 <div class="span1">
          <form id="contact-form" class="contact-form" action="bus-provincia.php" method="POST">

          <br></br>
                <select id= "pro" name="Provincia" onchange = "enviar();">
                <option selected value="0"> Provincia </option>
                <option value="San José">San José</option>
                <option value="Alajuela">Alajuela</option>
                <option value="Heredia">Heredia</option>
                <option value="Cartago">Cartago</option>
                <option value="Puntarenas">Puntarenas</option>
                <option value="Guanacaste">Guanacaste</option>
                <option value="Limón">Limón</option>
                </select>
                <!--<input type="button" onclick="enviar()" class = "external"value="Entrar">  -->
                </form> 
        <button onclick="ajax_post()"  type="submit">Buscar</button>

 <div class="span2">
 <div id="resp"></div>

  </div>

 </div>


       
</body>
</html>
