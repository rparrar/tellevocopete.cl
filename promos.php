<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-language" content="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.3">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href='http://fonts.googleapis.com/css?family=Happy+Monkey' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-git2.min.js"></script>
	<script src="js/funciones.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<title>Te llevo Copete? - Promociones</title>
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
    	<a class="navbar-brand" href="index.php"><p class="mediano verde"><i class="azul fa fa-beer"></i> Te llevo Copete <i class="azul fa fa-beer fa-flip-horizontal"></i></p></a> 
	</div>
 	<div class="collapse navbar-collapse navbar-ex1-collapse">
  		<ul class="nav navbar-nav navbar-right">
  			<li class="dropdown">
        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="verde"><i class="azul fa fa-glass"></i> Nuestros Productos<b class="caret"></b></p></a>
        		<ul class="dropdown-menu">
        		  <li><a href="licores.php"><i class="azul fa fa-video-camera fa-rotate-270"></i><span class=" azul"> Licores - Vinos</span></a></li>	
        		  <li class="disabled"><a href="#"><i class="fa fa-video-camera fa-rotate-270"></i><span class=""> Bebidas - Jugos</span></a></li>	
        		  <li><a href="cervezas.php"><i class="azul fa fa-video-camera fa-rotate-270"></i><span class=" azul"> Cervezas</span></a></li>	
        		  <li><a href="otros.php"><i class="verde fa fa-gift"><span class=" verde"> Otros</span></i></a></li>	
        		  <li><a href="snacks.php"><i class="azul fa fa-cutlery"><span class=" azul"> Para el Bajón</span></i></a></li>	        		 
        		</ul>
      		</li>
	    	<li class="dropdown">
        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class=" verde"><i class="azul fa fa-globe"></i> Navegar el Sitio<b class="caret"></b></p></a>
        		<ul class="dropdown-menu">
		          <li><a href="pedir.php"><i class="azul fa fa-hand-o-up"></i><span class=" azul"> Hacer un Pedido</span></a></li>
		          <li><a href="reparto.php"><i class="verde fa fa-truck"><span class=" verde"> Zonas de Reparto</span></i></a></li>
		          <li><a href="nosotros.php"><i class="azul fa fa-users"><span class=" azul"> Nosotros </p></i></a></li>
        		</ul>
      		</li>
    		</ul>
	</div>
</nav>

	<section class="text-center">
			<div class="espacio-arriba"> &nbsp;</div>
			<div class="espacio-arriba"> &nbsp;</div>
			<div class="col-xs-12 col-sm-12 col-md-12 text-center verde  animated fadeInLeft retraso-1">				
					<i class="fa fa-quote-left"></i>&nbsp; <?php include "frases.php"; ?>&nbsp;<i class="fa fa-quote-right"></i>
			</div>
			<div class="col-md-12"><h1 class="text-center  azul">PROMOCIONES</h1></div>
			<div class="col-xs-12 col-sm-12 col-md-12 barrabotones animated flash ">
				<a class="pull-left btn btn-success btn-lg" href="pedir.php">PEDIDO!</a>
				<a class="disabled pull-right btn btn-danger btn-lg" href="promos.php">PROMOS!</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12  barrabotones">
					<a class="btn btn-primary" href="licores.php" role="button">LICORES</a>
					<a class="btn btn-warning" href="cervezas.php" role="button">CERVEZAS</a>
					<a class="btn btn-danger" href="bebidas.php" role="button">BEBIDAS</a>
					<a class="btn btn-info" href="snacks.php" role="button">SNACKS</a>
					<a class="btn btn-success" href="otros.php" role="button">OTROS</a>
			</div>
			
			<p class="verde arreglate mediano">Acá encontrarás todas nuestras Promociones, y Packs de Bebida + Licor, Licor + Hielo, etc.</p>
			  		<div class="col-xs-12 col-sm-3 col-md-3">
				    	<div>
				    		<img src="img/promos/enviogratis.jpg" alt="Envío Gratis en tus Compras!" class="se verde">
				    		<div class="caption">
				    			<p class="blanco arreglate casimediano se-rojo">Envío Gratis en tu Pedido!</p>
				    			<p class="verde arreglate">Si tu pedido, es igual o mayor a $20.000, no te cobramos el envío!! Para ver nuestras zonas de reparto, haz click <a href="reparto.php">ACA!</a></p>
				    		</div>
				    	</div>
			  		</div>
			  		<div class="col-xs-12 col-sm-3 col-md-3">
				    	<div>
				    		<img src="img/promos/lente-bombilla.jpg" alt="Lente Bombilla Gratis" class="se verde">
				    		<div class="caption">
				    			<p class="blanco arreglate casimediano se-rojo">Regalo por tu Pedido!</p>
				    			<p class="verde arreglate">Si tu pedido es igual o mayor a $20.000, Llevate estos lentes-bombilla, para que veas como circula tu bebida o copete, hasta agotar STOCK!. Precio de referencia <strong>$2.000 c/u</strong>, promoción acumulable, con la de Envio Gratis</p>
				    		</div>
				    	</div>
			  		</div>
			  		<div class="col-xs-12 col-sm-3 col-md-3">
				    	<div>
				    		<img src="img/promos/promo-bebida.jpg" alt="Promo Agrando Bebida" class="se verde">
				    		<div class="caption">
				    			<p class="blanco arreglate casimediano se-rojo">Agranda Todas las Bebidas GRATIS!</p>
				    			<p class="verde arreglate">Agranda su Bebida??<br> - Si, cuanto es??<br> - NADA!! es <strong>GRATIS!<br> Agrandamos tu bebida de 1.5 a 2.5 Litros</strong>, hasta agotar Stock! <strong>(Ahorro de $1.000 por bebida)</strong> Ver <a href="bebidas.php">ACA!</a></p>
				    		</div>
				    	</div>
			  		</div>
			  		<div class="col-xs-12 col-sm-3 col-md-3">
				    	<div>
				    		<img src="img/promos/pronto.jpg" alt="Pronto Mas Promociones!" class="se verde">
				    		<div class="caption"><br>
				    			<p class="blanco arreglate casimediano se-rojo">Pronto Mas Promociones!</p>
				    		</div>
				    	</div>
			  		</div>
	</section>

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div class="col-xs-12 col-sm-12 col-md-12 text-center alert alert-info" role="alert">
		<p class="text-danger">www.tellevocopete.cl - info@tellevocopete.cl  -/- Web Diseñada por <a href="http://www.rpi.cl" target="_blank">RPI</a> 2005 - <?php echo date("Y"); ?></p>
	</div>
</body>
</html>