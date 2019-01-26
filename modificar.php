<?php
	$servidor = "localhost";
	$usuari = "root";
	$password = "";
	$db = "futbol";

	$codi = $_REQUEST['codi'];
	$nom= $_REQUEST['nom'];
	$localitat = $_REQUEST['localitat'];
	$web = $_REQUEST['web'];
	$escut = $_REQUEST['escut'];
	// Create connection
	$conn = new mysqli($servidor, $usuari, $password, $db);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
			if ($nom !=""){
				$sql = "update equips set nom=\"" . $nom . "\" where codi= " . $codi;
			}
			
			if ($localitat !=""){
				$sql = "update equips set localitat=\"" . $localitat . "\"  where codi= " . $codi;
			}
			
			if ($web !=""){
				$sql = "update equips set web=\"" . $web . "\" where codi= " . $codi;
			}
			
			if ($escut !=""){
				$sql = "update equips set escut=\"" . $escut . "\" where codi= " . $codi;
			}
			
			

			if ($conn->query($sql) === TRUE) {
				echo "Registre modificat amb èxit";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	}
?>