<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$i = 0;
while ($i <= 1337) {
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111)
        echo $i . "<br>";
    $i++;
}


?>

<body>

</body>

</html>

<!-- Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />). -->