<!DOCTYPE html>
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
	<script src="https://code.jquery.com/jquery-git2.min.js"></script>
	<script src="js/funciones.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<title>Te llevo Copete? - Ron</title>
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
    	<a class="navbar-brand" href="index.php"><p class="happy mediano verde"><i class="azul fa fa-beer"></i> Te llevo Copete <i class="azul fa fa-beer fa-flip-horizontal"></i></p></a> 
	</div>
 	<div class="collapse navbar-collapse navbar-ex1-collapse">
  		<ul class="nav navbar-nav navbar-right">
  			<li class="dropdown">
        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="happy verde"><i class="azul fa fa-glass"></i> Nuestros Productos<b class="caret"></b></p></a>
        		<ul class="dropdown-menu">
        		  <li><a href="licores.php"><i class="azul fa fa-video-camera fa-rotate-270"></i><span class="happy azul"> Licores - Vinos</span></a></li>	
        		  <li><a href="bebidas.php"><i class="verde fa fa-video-camera fa-rotate-270"></i><span class="happy verde"> Bebidas - Jugos</span></a></li>	
        		  <li><a href="cervezas.php"><i class="azul fa fa-video-camera fa-rotate-270"></i><span class="happy azul"> Cervezas</span></a></li>	
        		  <li><a href="otros.php"><i class="verde fa fa-gift"><span class="happy verde"> Otros</span></i></a></li>	
        		  <li><a href="snacks.php"><i class="azul fa fa-cutlery"><span class="happy azul"> Para el Bajón</span></i></a></li>	        		 
        		</ul>
      		</li>
	    	<li class="dropdown">
        		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><p class="happy verde"><i class="azul fa fa-globe"></i> Navegar el Sitio<b class="caret"></b></p></a>
        		<ul class="dropdown-menu">
		          <li><a href="pedir.php"><i class="azul fa fa-hand-o-up"></i><span class="happy azul"> Hacer un Pedido</span></a></li>
		          <li><a href="reparto.php"><i class="verde fa fa-truck"><span class="happy verde"> Zonas de Reparto</span></i></a></li>
		          <li><a href="nosotros.php"><i class="azul fa fa-users"><span class="happy azul"> Nosotros </p></i></a></li>
        		</ul>
      		</li>
    		</ul>
	</div>
</nav>

	<section class="text-center">
			<div class="espacio-arriba"> &nbsp;</div>
			<div class="espacio-arriba"> &nbsp;</div>
			<div class="col-xd-12 col-sm-12 col-md-12 text-center verde happy animated fadeInLeft retraso-1">				
				<i class="fa fa-quote-left"></i>&nbsp; <?php include "frases.php"; ?>&nbsp;<i class="fa fa-quote-right"></i>
			</div>
			<h1 class="happy azul">RON</h1>
			<div class="col-xs-12 col-sm-12 col-md-12 barrabotones animated flash ">
				<a class="pull-left btn btn-success btn-lg" href="pedir.php">PEDIDO!</a>
				<a class="pull-right btn btn-danger btn-lg" href="promos.php">PROMOS!</a>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 barrabotones">
				<div class="btn-group">
  				<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
    				LICORES <span class="caret"></span>
  				</button>
  				<ul class="dropdown-menu" role="menu">
				    <li><a href="ron.php">RON</a></li>
				    <li><a href="pisco.php">PISCO</a></li>
				    <li><a href="vodka.php">VODKA</a></li>
				    <li><a href="whisky.php">WHISKY</a></li>
				    <li><a href="vino.php">VINOS</a></li>
				    <li><a href="otroslicores.php">OTROS</a></li>
			  	</ul>
			</div>
					<a class="btn btn-warning" href="cervezas.php" role="button">CERVEZAS</a>
					<a class="btn btn-success" href="bebidas.php" role="button">BEBIDAS</a>
					<a class="btn btn-info" href="snacks.php" role="button">SNACKS</a>
					<a class="btn btn-danger" href="otros.php" role="button">OTROS</a>
			</div>
			  	<div class="col-xs-4 col-sm-4 col-md-3">
				   	<div class="thumbnail">
				   		<img src="img/ron/1_madero_anejado.jpg" alt="Ron Maddero Dorado Añejo" class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Ron Maddero Dorado Añejo</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 5.500</p>
				   		</div>
				   	</div>
			  		</div>
			  		<div class="col-xs-4 col-sm-4 col-md-3">
				    	<div class="thumbnail">
				    		<img src="img/ron/2_bacardi_anejo.jpg" alt="Ron Baccardi Añejo 750 CC." class="se verde">
				    		<div class="caption">
				    			<p class="happy arreglate">Ron Baccardi Añejo 750 CC.</p>
				    			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 8.000</p>
				    		</div>
				    	</div>
			  		</div>
			  		<div class="col-xs-4 col-sm-4 col-md-3">
				    	<div class="thumbnail">
				    		<img src="img/ron/3_madero_anejo.jpg" alt="Ron Maddero Añejo 750 CC." class="se verde">
				    		<div class="caption">
				    			<p class="happy arreglate">Ron Maddero Añejo 750 CC.</p>
				    			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 6.500</p>
				    		</div>
				    	</div>
			  		</div>
			  		<div class="col-xs-4 col-sm-4 col-md-3">
				    	<div class="thumbnail">
				    		<img src="img/ron/4_sierra_dorado.jpg" alt="Ron Sierra Morena Dorado" class="se verde">
				    		<div class="caption">
				    			<p class="happy arreglate">Ron Sierra Morena Dorado</p>
				    			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 5.000</p>
				    		</div>
				    	</div>
			  		</div>
			  		<div class="col-xs-4 col-sm-4 col-md-3">
				    	<div class="thumbnail">
				    		<img src="img/ron/5_flor_4a.jpg" alt="Ron Flor de Caña 4 Años" class="se verde">
				    		<div class="caption">
				    			<p class="happy arreglate">Ron Flor de Caña Gold 4 Años</p>
				    			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 8.000</p>
				    		</div>
				    	</div>
			  		</div>
			  		<div class="col-xs-4 col-sm-4 col-md-3">
				    	<div class="thumbnail">
				    		<img src="img/ron/5_flor_4a.jpg" alt="Ron Flor de Caña 5 Años" class="se verde">
				    		<div class="caption">
				    			<p class="happy arreglate">Ron Flor de Caña Gold 5 Años</p>
				    			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 11.000</p>
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