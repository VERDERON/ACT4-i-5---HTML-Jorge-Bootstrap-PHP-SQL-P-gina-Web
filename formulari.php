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
 
	 <!-- Main component for a primary marketing message or call to action -->
		  <div class="jumbotron">
		  
			<form name="formulari1" method="get" action="insert.php">
			<th><b><h2>INSERTAR DATOS</h2></th>
			<table class="table table-striped">
				<tr><td>Codi: <input type="text" name="codi" value=""></td>
				<td>Nom: <input type="text" name="nom" value=""></td>
				<td>Localitat: <input type="text" name="localitat" value=""></td></tr><br>
				<tr><td>Web: <input type="text" name="web" value=""></td>
				<td>Escut: <input type="text" name="escut" value=""></td>
				<td><input type="submit" value="INSERTAR"></td></tr>
			</table>
			</form>
		  </div>
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
</html>