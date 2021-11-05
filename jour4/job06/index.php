<form action="./index.php"method="GET">
<label for="nombre">nombre:</label>
<input type="text"id="nombre" name="nombre"><br><br>
<input type="submit"value="submit">
<form>
    <br>
<?php


        if($_GET["nombre"]%2==0){
           echo "nombre ".$_GET["nombre"]." est paire <br/>";

        }
        else{
          echo "nombre ".$_GET["nombre"]." est impaire <br/>";
        }


     
?> 