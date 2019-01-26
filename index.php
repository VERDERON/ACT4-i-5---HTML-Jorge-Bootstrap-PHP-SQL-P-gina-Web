<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Navbar Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estils.css" rel="stylesheet">
  </head>

	<body>

		<div class="container">
		  		  <!-- Static navbar -->
		  <nav class="navbar navbar-default">
			<div class="container-fluid">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">AP-WEB</a>
			  </div>
			  <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				  <li class="active"><a href="index.php">Home</a></li>
				  <li><a href="mostrar1.php">Mostrar1</a></li>
				  <li><a href="mostrar2.php">Mostrar2</a></li>
				  <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Formulario <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">OPCIONES</li>
						<li><a href="formulari.php">INSERTAR</a></li>
						<li><a href="formulari2.php">MODIFICAR</a></li>
						<li><a href="formulari3.php">BORRAR</a></li>
					</ul>
				  </li>
				</ul>

			  </div><!--/.nav-collapse -->
			</div><!--/.container-fluid -->
		  </nav>
 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
			<!-- Bootstrap v4 -->
				<div class="row justify-content-center">
					<div class="col-sm-8"></div>
					<img class="first-slide" src="images/fcbarcaescudo-675x422.jpg " width="1255" height="470" alt="First slide"/>
				</div>
			</div>
			<div class="item">
				<div class="row justify-content-center">
			  <img class="second-slide" src="images/JUGADORES BARÇA.png" width="1255" height="470" alt="Second slide"/>
				</div>
			</div>
			<div class="item">
				<div class="row justify-content-center">
				<img class="third-slide" src="images/madrid-barcelona.jpg" width="1255" height="470" alt="Third slide"/>
				</div>
			</div>
		</div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
		<!-- Main component for a primary marketing message or call to action -->
		</div> <!-- /container -->

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="js/ie10-viewport-bug-workaround.js"></script>
	</body>
		<style> .footer {
					position: fixed;
					left: 70;
					right: 70;
					background-color: EAE9E9;
					color: black;
					text-align: center;
											}
		</style>
	<div class="footer">
  <p><b>EQUIPOS Y TÍTULOS</b></p>
	</div>
</html>
