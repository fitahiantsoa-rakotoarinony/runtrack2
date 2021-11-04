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

$str="On n est pas le meilleur quand on le croit mais quand on le sait.";

$dic = array(
    "consonne"=> array("b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z"),
    "voyelle"=> array("a","e","o","i","y","u","O"),
);
$v=0;
$c=0;

for( $i=0; isset($str[$i])==true;$i++){

    for($x =0; isset($dic["consonne"][$x]); $x++){
    if($str[$i] == $dic["consonne"][$x]){
        $c++;
    }
}

    for($y =0; isset($dic["voyelle"][$y]); $y++){

    
    if($str[$i] == $dic["voyelle"][$y]){
    $v++;
    }
}
}

?> 
<table>
<thead>
<th>"voyelle"</th>  
<th>"consonne"</th>   
</thead>    
<tbody>
<td><?php echo "nous avons $v voyelle <br>";?></td>    
<td><?php echo "nous avons $c consonne <br>";?></td>  

</tbody>
</table>

</body>
</html>