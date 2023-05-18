<?php 
include('conn/conexion.php');
$turnos = "SELECT * FROM contador ORDER BY id DESC LIMIT 1"; 
?>

<?php 
 $resultado = mysqli_query($conexion, $turnos);
 while($row=mysqli_fetch_assoc($resultado)) { 
  ?>
  <!--<h1 id="repeat-1" style="font-size: 10vw;color:red;background: #2a0000;border-bottom:ridge;font-family: 'Codystar', cursive;">Alcaldía de El Congo</h1> -->

  <div class="container-fluid">
  <div class="row" style="margin-top: 20vh;">

    <h1 style="color: #fff;  font-size:  50px;" align="center">Alcaldia Municipal de El Congo <br><br></h1>
    
<div class="col-6">
      <h1 style="color:white; font-size: 8vw;" align="center">TURNO</h1>
      <h1 id="repeat-1" style="font-size: 14vw;color:red;background: #2a0000;border-bottom:ridge;font-family: 'Codystar', cursive;" align="center"><?php echo $row["turno"]; ?></h1>

    </div>

    <div class="col-6">
          <h1 style="color:white; font-size: 8vw;" align="center">CAJA</h1>
      <h1 id="repeat-1" style="font-size: 14vw;color:red;background: #2a0000;border-bottom:ridge;font-family: 'Codystar', cursive; " align="center"><?php echo $row["caja"]; ?></h1>
    </div>
</div>
</div>
    <?php } mysqli_free_result($resultado); ?>

<script>
let newWindow = open("sound/consultorio.mp3", "example", "width=300,height=300");


setTimeout(function() { 
newWindow.close() }, 2500);


function start() {
openClose();
}


window.onload = start;
</script>    