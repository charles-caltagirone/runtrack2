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
    $vraioufaux = true;
    $entier = 5;
    $caracteres = "Hello";
    $decimaux = 1.5;
    ?>

    <table>
        <thead>
            <tr>
                <td>Type</td>
                <td>Nom</td>
                <td>Valeur</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>boolean</td>
                <td>$vraioufaux</td>
                <td>
                    <?php
                    echo $vraioufaux;
                    ?>
                </td>
            </tr>
            <tr>
                <td>int</td>
                <td>$entier</td>
                <td>
                    <?php
                    echo $entier;
                    ?>
                </td>
            </tr>
            <tr>
                <td>string</td>
                <td>$caracteres</td>
                <td>
                    <?php
                    echo $caracteres;
                    ?>
                </td>
            </tr>
            <tr>
                <td>float</td>
                <td>$decimaux</td>
                <td>
                    <?php
                    echo $decimaux;
                    ?>
                </td>
            </tr>

        </tbody>
    </table>

</body>

</html>