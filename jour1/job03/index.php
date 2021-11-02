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
    //variables de types primitifs
    $int=5;
    $bool = true;
    $float = 4;
    $str = "Bonjour";
    ?>
<table>
    <tr>
        <th>type</th>
        <th>nom</th>
        <th>valeur</th>

    </tr>

    <tr>
        
             <td><?php echo gettype($int)?></td>
             <td>$int</td>
             <td><?php echo $int ?></td>
    </tr>

    <tr>
        <td><?php echo gettype($bool)?></td>
             <td>$bool</td>
             <td><?php echo $bool ?></td>
    </tr>

    <tr>
        <td><?php echo gettype($float)?></td>
             <td>$float</td>
             <td><?php echo $float ?></td>
    </tr>

    <tr>
        <td><?php echo gettype($str)?></td>
             <td>$str</td>
             <td><?php echo $str ?></td>

    </tr>
</table>

</body>
</html>