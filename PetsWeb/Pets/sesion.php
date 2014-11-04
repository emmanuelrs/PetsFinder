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

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<script src="http:/code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="main.js"></script>
<style>
form{
	margin: 90px auto;
	width: 200px;
}
h1{
	text-align: center;
}
.fa{
	display: none;
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
<!-- End Analytics -->

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
                <li class="current"><a href="index.php" class = "external">Inicio</a></li>
                <li><a href="registrarPersona.php" class = "external">Registrar persona</a></li>
          </ul>
      </nav>
        
    </div>
</header>
        
    </div>
    <h1> <br/>Bienvenido</h1>
    <form action = "process.php" method = 'POST' >
    	<p>
        	<label for="NombreUsuario">Nombre de Usuario</label>
            <input class="form-control" id="NombreUsuario" name="NombreUsuario" type="text"/>
        </p>
        <p>
        	<label for="Contraseña">Contraseña</label>
            <input class="form-control" id="Contraseña" name="Contraseña" type="password"/>
        </p>
        <input class="btn btn-primary" type="submit" value="Login">
        <i class="fa fa-refresh fa-spin"></i>
    </form>
    <span></span>
</body>
</html>