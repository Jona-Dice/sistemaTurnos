<?php 
$turnos = "SELECT * FROM contador ORDER BY id DESC LIMIT 1"; 
 ?>

 <?php 
 $resultado = mysqli_query($conexion, $turnos);
 while($row=mysqli_fetch_assoc($resultado)) { 
 	?>
 	<!-- Dev agrego style al código el día 05-05-23 -->
 	<style>
      body {
      	background-color: #dddddd;
        background-image: url('alcaldia.png');
        background-repeat: no-repeat;
  		background-position: center right;
      }
    </style>
    <div class="container py-5">
    	<div class="row justify-content-center">
    		<div class="col-md-7">
			<div class="card border-primary">
				<div class="card-header bg-primary text-white text-center">
<h1 align="center">Alcaldia Municipal de El Congo</h1>
<div class="container">
	<div class="row">
<form action="conn/model/insertar.php" method="post">
	<div>
		<!-- Codigo agregado para seleccionar los turnos-->
		<div>
			<label>Ingrese el número de turno:</label>
			<br>
			<input class="form-control col-sm-3" type="number" name="turno1" id="turno1" placeholder="Ingrese el número de turno" required>
		</div>	
		<!-- Fin de codigo -->
	<input type="hidden" name="uno" id="uno" value="1" required /> <!--Esta linea de codigo ya estaba, modificada 17-05-2023 -->
	</div>

	<div>
	<input type="hidden" name="id" id="id" value="<?php echo $row["id"]; ?>" required />
	</div>



	<div> 
	<!--<input type="hidden" name="turno1" id="turno1" value="<//?php echo $row["turno"]; ?>" required /> -->
	</div> 
	<br>

	<h5>Antes de recibir un paciente, pulsa en el botón refrescar.</h5>
	<img src="img/refrescar.png" onclick="javascript:location.reload()" width="50">
	<br>
	<br>
	<div>
	<label>Caja</label>
	<br>
	<select class="form-select col-sm-3" name="caja" id="caja" aria-label="Default select example">
  <option selected>Seleccionar la caja</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
</select>
	</div>
<br>
	<input class="btn btn-success" type="submit" value="Llamar Usuario">
	
</form>

<form action="conn/model/reset.php" method="post">
	<div>
	<input type="hidden" name="uno" id="uno" value="1" required />
	</div>
	<div>
	<input type="hidden" name="cero" id="cero" value="0" required />
	</div>
	<div>
	<div>
	<input type="hidden" name="turno1" id="turno1" value="0" required />	
	</div>	
	<input type="hidden" name="caja" id="caja" value="0" required />
	</div>
	<div>
	<input type="hidden" name="id" id="id" value="<?php echo $row["id"]; ?>" required />
	</div>
	<br>
	<input class="btn btn-danger" type="submit" value="Formatear turnos">
	
</form> 

<?php } mysqli_free_result($resultado); ?>
<br>
<!--<iframe src="/cartelera_staff.php" width="20%" height="400">
</iframe> -->
<div align="center">
	<a  href="/cartelera.php" target="_blank" ><img  src="/img/tv.jpg" width="80" height="80" >
	</a><br>
	<span>Ver turnos en tiempo real</span>
	<br>
	<br>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
    </div>