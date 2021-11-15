<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            margin: auto;
            width: 80%;
            border-collapse: collapse;
            border: 1px solid black;
            text-align: center;
        }
        th,td{
            border: 1px solid black;
            height: 50px;
        }
    </style>
</head>

<body>
    <?php


    $bdd = mysqli_connect('localhost', 'root', '', 'jour8');

    mysqli_set_charset($bdd, 'UTF8');

    $requete = mysqli_query($bdd, 'SELECT SUM(superficie) as superficie_totale FROM etage ');

    $etage = mysqli_fetch_all($requete, MYSQLI_ASSOC);

   // var_dump($etage);

    echo "<table><thead>
    <th>superficie_totale</th>
   
</thead>
<tbody>";
    foreach ($etage as $niveau) {
        echo " <tr>
            <td>" . $niveau['superficie_totale'] . "</td>
           
        </tr>";
    }

    echo "</tbody>
</table>";




    ?>

</body>

</html>