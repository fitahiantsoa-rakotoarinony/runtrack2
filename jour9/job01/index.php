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

    $requete = mysqli_query($bdd, 'SELECT * FROM etudiants');

    $etudiants = mysqli_fetch_all($requete, MYSQLI_ASSOC);

    var_dump($etudiants);

    echo "<table><thead>
    <th>id</th>
    <th>prenom</th>
    <th>nom</th>
    <th>naissance</th>
    <th>sexe</th>
    <th>email</th>
</thead>
<tbody>";
    foreach ($etudiants as $etudiant) {
        echo " <tr>
            <td>" . $etudiant['id'] . "</td>
            <td>" . $etudiant['prénom'] . "</td>
            <td>" . $etudiant['nom'] . "</td>
            <td>" . $etudiant['naissance'] . "</td>
            <td>" . $etudiant['sexe'] . "</td>
            <td>" . $etudiant['email'] . "</td>
        </tr>";
    }

    echo "</tbody>
</table>";




    ?>

</body>

</html>