<?php  

	/*include('../conexion.php');


	$uno = $_POST["uno"];
	$id = $_POST["id"];
	$turno = $_POST["turno1"];
	$caja = $_POST["caja"];
	$suma_id = $id + $uno;
	//$suma_turno = $turno + $uno;

	//id='$suma_id' , turno='$suma_turno'
	$insertarSQL = "INSERT INTO contador SET  id='$suma_id',turno='$turno', caja='$caja'";
	$resultado = mysqli_query($conexion, $insertarSQL);

	if($resultado) {
		echo "<script>window.location='/volver.html'</script>";
	} else {
		echo "<script>alert('Error vuelve a intentarlo.')</script>";
		echo '<meta http-equiv="refresh" content="0; url=/index.php">';
	}
	**/


	include('../conexion.php');

	$uno = isset($_POST["uno"]) ? $_POST["uno"] : '';
	//$cero = isset($_POST["cero"]) ? $_POST["cero"] : '';
	$id = isset($_POST["id"]) ? $_POST["id"] : '';
	$turno = isset($_POST["turno1"]) ? $_POST["turno1"] : '';
	$caja = isset($_POST["caja"]) ? $_POST["caja"] : '';
	$suma_id = $id + $uno;


	$insertarSQL = "INSERT INTO contador SET id='$suma_id', turno='$turno', caja='$caja'";

	try {
		if(mysqli_query($conexion, $insertarSQL)) {
			echo "<script>window.location='/volver.html'</script>";
		} 
	
else {
			throw new Exception(mysqli_error($conexion));
		}
	} 
		
	
catch (Exception $e) {
		echo "<script>alert('Error: ".$e->getMessage()."')</script>";
		echo '<meta http-equiv="refresh" content="0; url=/index.php">';
	}



 ?>