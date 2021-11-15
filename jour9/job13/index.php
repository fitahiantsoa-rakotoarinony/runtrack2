<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: auto;
            width: 80%;
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }

        th,
        td {
            border: 1px solid black;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php


    $bdd = mysqli_connect('localhost', 'root', '', 'jour8');

    mysqli_set_charset($bdd, 'UTF8');

    $requete = mysqli_query($bdd, 'SELECT etage.nom , salle.nom  FROM `salle` INNER JOIN `etage` ON etage.id = salle.id_etage');

    $salle = mysqli_fetch_all($requete);
  
   // var_dump($salle);
   

    echo "<table><thead>
    <th>salles</th>
    <th>etage</th>
   
</thead>
<tbody>";
    foreach ($salle as $etage ) {
        echo " <tr>
            <td>" . $etage[0] . "</td>
           <td>" . $etage[1] . "</td>
            
        </tr>";
    }

    echo "</tbody>
</table>";




    ?>

</body>

</html>