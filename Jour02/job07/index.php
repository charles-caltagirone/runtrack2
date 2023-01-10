<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        text-align: center;
    }
</style>

<body>

    <?php
    $hauteur = 5;

    for ($i = 0; $i < $hauteur; $i++) {
        for ($y = 0; $y <= $i; $y++) {
            echo "*";
        }
        echo "<br />";
    }
    ?>

</body>

</html>