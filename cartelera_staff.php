<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx">
  <link rel="stylesheet" type="text/css" href="data/web.css">
  <title>Cartelera</title>


</head><head>
    <meta charset="utf-8">
    <title>Cartelera</title>
  </head>
  <body onload = "table();">
    <!--<h1>Alcaldia Municipal de El Congo</h1> -->
    <script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("table").innerHTML = this.responseText;
        }
        xhttp.open("GET", "cartelera_web_staff.php");
        xhttp.send();
      }

      setInterval(function(){
        table();
      }, 10);
    </script>
    

    <div id="table" style="margin-top: 5vw;">
      
    </div>
    <script>
let newWindow = open("sound/consultorio.mp3", "example", "width=300,height=300");


setTimeout(function() { 
newWindow.close() }, 2500);


function start() {
openClose();
}


window.onload = start;
</script>
<meta http-equiv="refresh" content="5; ">
  </body>
</html>
