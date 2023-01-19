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

    
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');

    $result = $mysqli->query("SELECT * FROM salles ORDER BY `capacité` ASC");
    $result = $result->fetch_assoc();

   
    ?>

<table>
        <thead>
            <tr>
                <th>Capacité totale</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <?php echo "<td>" . $result['*'] . "</td>" ?>
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