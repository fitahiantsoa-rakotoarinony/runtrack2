<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php




$compteur=0;
foreach($_POST as $valeur){
   
    $compteur++;

}
echo "le nombre d'argument POST est:".$compteur."<br>";
?>
<form action="./index.php"method="POST">
<label for="prenom">prenom:</label>
<input type="text"id="prenom" name="prenom"><br><br>
<label for="nom">nom:</label>
<input type="text"id="nom"name="nom"><br><br>
<input type="submit"value="submit">
<form>

</body>
</html>
