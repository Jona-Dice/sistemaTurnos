<?php  

	/*include('../conexion.php');


	$uno = $_POST["uno"];
	$cero = $_POST["cero"];
	$id = $_POST["id"];
	$turno = $_POST["turno"];
	$caja = $_POST["caja"];
	$suma_id = $id + $uno;
	$turno_mas = $turno * $cero;
		//turno='$turno_mas'

	$insertarSQL = "INSERT INTO contador SET id='$suma_id' ,  , caja='$caja'";
	$resultado = mysqli_query($conexion, $insertarSQL);

	if($resultado) {
		echo "<script>window.location='/index.php'</script>";
	} else {
		echo "<script>alert('No puedes pedir pacientes si no refrescaste la página.')</script>";
		echo '<meta http-equiv="refresh" content="0; url=/index.php">';
	}*/ 
	include('../conexion.php');

	$uno = isset($_POST["uno"]) ? $_POST["uno"] : '';
	$cero = isset($_POST["cero"]) ? $_POST["cero"] : '';
	$id = isset($_POST["id"]) ? $_POST["id"] : '';
	$turno = isset($_POST["turno"]) ? $_POST["turno"] : '';
	$caja = isset($_POST["caja"]) ? $_POST["caja"] : '';
	$suma_id = $id + $uno;
	$turno_mas = $turno + $cero;

	$insertarSQL = "INSERT INTO contador SET id='$suma_id', turno='$turno_mas', caja='$caja'";
	$resultado = mysqli_query($conexion, $insertarSQL);

	if ($resultado) {
		echo "<script>window.location='/index.php'</script>";
	} else {
		echo "<script>alert('No puedes pedir pacientes si no refrescaste la página.')</script>";
		echo '<meta http-equiv="refresh" content="0; url=/index.php">';
	}

 ?>