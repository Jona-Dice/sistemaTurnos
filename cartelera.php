<!DOCTYPE html>
<html lang="es" dir="ltr" style="background: black;">  
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="data/web.css">
  <title>Cartelera</title>


</head><head>
    <meta charset="utf-8">
    <title>Cartelera</title>
  </head>
  <body>
  <div onload = "table();video();" style="background:black;"> 
    <script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("table").innerHTML = this.responseText;
        }
        xhttp.open("GET", "tiemporeal.php");
        xhttp.send();
      }

      setInterval(function(){
        table();
      }, 1000);
    </script>
    <div id="table">
    
      
    </div>
  </div>
  <h1 id="repeat-1" style="font-size: 10vw;color:red;background: #2a0000;border-bottom:ridge;font-family: 'Codystar', cursive;"> </h1>



  </body>
</html>
