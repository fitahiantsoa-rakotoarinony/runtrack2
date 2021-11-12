<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .disparait{
             display: none;
        }
    </style>
</head>

<body>
    <?php
    var_dump($_GET);

    if(isset($_GET['prenom'])==true){
        setcookie('prenom', $_GET['prenom']); 
    }

    if(isset($_COOKIE['prenom'])==true){
        echo "Bonjour ".$_COOKIE['prenom'].'!';
    }



    if(isset($_COOKIE['prenom']) == true ){
         
        echo ' <div class="disparait">'  ;        
    }else{
        echo"<div>";
    }

        
    ?>

    <form action="./index.php" method="get">
        <br>
        <label for="prenom">Prenom:</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom"><br><br>

        <input type="submit" value="connexion">
    </div>
    <br><br>
        <input type="submit" value="Déconnexion" name="deco">

    </form>
   
  
</body>

</html>