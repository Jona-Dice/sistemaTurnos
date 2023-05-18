<?php 
include('conn/conexion.php');
$turnos = "SELECT * FROM contador ORDER BY id DESC LIMIT 6"; 
?>

<!DOCTYPE html>
<html>
<body>
  <!--<h1 id="repeat-1" style="font-size: 10vw;color:red;background: #2a0000;border-bottom:ridge;font-family: 'Codystar', cursive;">Alcaldía de El Congo</h1> -->

 <?php 
 $resultado = mysqli_query($conexion, $turnos);
 while($row=mysqli_fetch_assoc($resultado)) { 
 	?>


 <div class="container-fluid">
  <div class="row">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Turno</th>
      <th scope="col">Caja</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $row["turno"]; ?></td>
      <td><?php echo $row["caja"]; ?></td>
    </tr>

  </tbody>
</table>

		</div>
	</div>

<?php } mysqli_free_result($resultado); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>