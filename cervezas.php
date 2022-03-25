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

<title>Te llevo Copete? - Cervezas</title>
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
        		  <li class="disabled"><a href="#"><i class="fa fa-video-camera fa-rotate-270"></i><span class="happy"> Cervezas</span></a></li>	
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
			<div class="col-md-12"><h1 class="text-center happy azul">CERVEZAS</h1></div>
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
					<a class="disabled btn btn-danger" href="cervezas.php" role="button">CERVEZAS</a>
					<a class="btn btn-success" href="bebidas.php" role="button">BEBIDAS</a>
					<a class="btn btn-info" href="snacks.php" role="button">SNACKS</a>
					<a class="btn btn-warning" href="otros.php" role="button">OTROS</a>
			</div>
			<div class="col-xs-6 col-sm-2 col-md-2">
				   	<div class="thumbnail">
				   		<img src="img/cervezas/1_corona355.jpg" alt="Cerveza Corona Botella 355 CC." class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Cerveza Corona Botella 355 CC.</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 1.500</p>
				   		</div>
				   	</div>
			</div>
			<div class="col-xs-6 col-sm-2 col-md-2">
				   	<div class="thumbnail">
				   		<img src="img/cervezas/2_corona355x6.jpg" alt="Cerveza Corona Pack 6 Botellas 355 CC." class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Corona Pack 6 Botellas 355 CC.</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 8.000</p>	
				   		</div>
				   	</div>
			</div>
			<div class="col-xs-6 col-sm-2 col-md-2">
				   	<div class="thumbnail">
				   		<img src="img/cervezas/3_stella354.jpg" alt="Cerveza Stella A Lata 354 CC." class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Cerveza Stella A. Lata 354 CC.</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 1.500</p>
				   		</div>
				   	</div>
			</div>
			<div class="col-xs-6 col-sm-2 col-md-2">
				   	<div class="thumbnail">
				   		<img src="img/cervezas/4_stella354x6.jpg" alt="Cerveza Stella A. Pack 6 Latas 354 CC." class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Stella A. Pack 6 Latas 354 CC.</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 8.000</p>	
				   		</div>
				   	</div>
			</div>	 	
			<div class="col-xs-6 col-sm-2 col-md-2">
				   	<div class="thumbnail">
				   		<img src="img/cervezas/5_pacena355.jpg" alt="Cerveza Paceña Lata 355 CC." class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Cerveza Paceña Lata 355 CC.</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 1.000</p>
				   		</div>
				   	</div>
			</div>
			<div class="col-xs-6 col-sm-2 col-md-2">
				   	<div class="thumbnail">
				   		<img src="img/cervezas/6_pacena355x6.jpg" alt="Cerveza Paceña Pack 6 Latas 355 CC." class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Paceña Pack 6 Latas 355 CC.</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 5.000</p>	
				   		</div>
				   	</div>
			</div>
			<div class="col-xs-6 col-sm-2 col-md-2">
				   	<div class="thumbnail">
				   		<img src="img/cervezas/7_becker350.jpg" alt="Cerveza Becker Lata 350 CC." class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Cerveza Becker Lata 350 CC.</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 1.000</p>
				   		</div>
				   	</div>
			</div>
			<div class="col-xs-6 col-sm-2 col-md-2">
				   	<div class="thumbnail">
				   		<img src="img/cervezas/8_becker350x6.jpg" alt="Becker Pack 6 Latas 350 CC." class="se verde">
				   		<div class="caption">
				   			<p class="happy arreglate">Becker Pack 6 Latas 350 CC.</p>
				   			<p class="happy bg-info arreglate azul"><i class="fa fa-usd azul"></i> 5.000</p>	
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
    <script>
	    $(function () {
	  	$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	<div class="col-xs-12 col-sm-12 col-md-12 text-center alert alert-info" role="alert">
		<p class="text-danger">www.tellevocopete.cl - info@tellevocopete.cl  -/- Web Diseñada por <a href="http://www.rpi.cl" target="_blank">RPI</a> 2005 - <?php echo date("Y"); ?></p>
	</div>
</body>
</html>