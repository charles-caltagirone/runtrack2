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
    $servername = 'localhost';
    $username = 'root';
    $password = '';

    try {
        $conn = new PDO("mysql:host=$servername;dbname=jour09", $username, $password);
        //On définit le mode d'erreur de PDO sur Exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'Connexion réussie';
    }

    /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/ catch (PDOException $e) {
        // echo "Erreur : " . $e->getMessage();
    }

    // On récupère tout le contenu de la table etudiants
    $sqlQuery = 'SELECT * FROM etudiants';
    $etudiantsStatement = $conn->prepare($sqlQuery);
    $etudiantsStatement->execute();
    $etudiants = $etudiantsStatement->fetchAll();

    $result = $conn->query($sqlQuery);

    $nb_etudiants = $result->rowCount();
    
    ?>
    <table>
        <thead>
            <tr>
                <th>Nombre d'étudiants</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <?php echo "<td>" . $nb_etudiants . "</td>" ?>
                </tr>
        </tbody>
    </table>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }

        th,
        td {
            border: 1px solid;
        }
    </style>
</body>

</html>