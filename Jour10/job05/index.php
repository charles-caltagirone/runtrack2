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
    $sqlQuery = 'SELECT * FROM etudiants WHERE `naissance` >= "2005-01-20"';
    $etudiantsStatement = $conn->prepare($sqlQuery);
    $etudiantsStatement->execute();
    $etudiants = $etudiantsStatement->fetchAll();
    ?>
    <table>
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($etudiants as $etudiant) {
            ?>
                <tr>
                    <?php echo "<td>" . $etudiant['prenom'] . "</td>" ?>
                    <?php echo "<td>" . $etudiant['nom'] . "</td>" ?>
                    <?php echo "<td>" . $etudiant['naissance'] . "</td>" ?>
                    <?php echo "<td>" . $etudiant['sexe'] . "</td>" ?>
                    <?php echo "<td>" . $etudiant['email'] . "</td>" ?>
                <?php
            }
                ?>
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