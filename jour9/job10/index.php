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

    $requete = mysqli_query($bdd, 'SELECT * FROM salle ORDER BY capacite ');

    $salle = mysqli_fetch_all($requete, MYSQLI_ASSOC);

   // var_dump($salle);

    echo "<table><thead>
    <th>id</th>
    <th>nom</th>
    <th>id_etage</th>
    <th>capacite</th>
   
 </thead>
<tbody>";
        foreach ($salle as $salles) {
            echo " <tr>
               <td>" . $salles['id'] . "</td>
               <td>" . $salles['nom'] . "</td>
               <td>" . $salles['id_etage'] . "</td>
               <td>" . $salles['capacite'] . "</td>
           </tr>";
      }

        echo "</tbody>
     </table>";




    ?>

</body>

</html>