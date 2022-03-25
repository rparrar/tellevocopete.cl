<?php
$nombre = $_POST['nombre'];
$mail = $_POST['correo'];
$telefono = $_POST['telefono'];
$pedido = $_POST['pedido'];

$header = 'From: ' . "info@tellevocopete.cl" . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por "." \r\n".
$mensaje = "Nombre " . $nombre . " \r\n".
$mensaje = "Su Telefono " . $telefono . " \r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['pedido'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'info@tellevocopete.cl';
$asunto = 'Un Pedido por el formulario de Contacto!!';
mail($para, $asunto, utf8_decode($mensaje), $header);
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.3">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<META HTTP-EQUIV="REFRESH" CONTENT="2;URL=licores.php"> 
<title>Te llevo Copete? - Pedido OK</title>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	      	<span class="sr-only">Desplegar navegación</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
	    </button>
    	<a class="navbar-brand" href="#"><p class="happy mediano verde"><i class="azul fa fa-beer"></i> Te llevo Copete <i class="azul fa fa-beer fa-flip-horizontal"></i></p></a> 
	</div>
 	
</nav>
	<div class="mas-espacio-arriba">
			&nbsp;
		</div>
	<div class="text-center mediano">
			<article class="mas-espacio-arriba animated fadeIn">
				<div class="col-xs-12 col-sm-6 col-md-7 inline-block"> 
					<div class="panel panel-success">	
						<div class="panel-heading">
							<h6 class="play negro mediomediano">Mensaje Enviado! Te llamamos para validar el pedido</h6>
							<img src="img/ok.png" class="animated fadeIn">
						</div>
						<div class="panel-body">
							<p class="text-center play"> Redirigiendo a la página de los productos...</p>
							<img src="img/ok.png" class="animated fadeIn retraso-1">
						</div>
					</div>
				</div>
			</article>
		</div>
		</div>
<script src="https://code.jquery.com/jquery-git2.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>