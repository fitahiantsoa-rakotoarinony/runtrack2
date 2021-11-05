
<form action="./index.php"method="GET">
<label for="username">username:</label>
<input type="text"id="username" name="username"><br><br>
<label for="password">password:</label>
<input type="text"id="password"name="password"><br><br>
<input type="submit"value="submit">
<form>
<br>

<?php

if($_GET["username"]=="jhon" && $_GET["password"]=="Rambo"){

echo "C’est pas ma guerre <br>";

}
else {
    echo "Votre pire  cauchemar. <br>";
}
   

?>