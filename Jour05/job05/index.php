<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php
                                    if (isset($_GET['style']) != null) {
                                        echo $_GET['style'];
                                    } else {
                                        echo 'default';
                                    }
                                    ?>.css">

</head>

<body>
    <form action="" method="get">
        <select name="style">
            <option value="default">-- Choisir un style --</option>
            <option class="red" value="red">Rouge</option>
            <option class="blue" value="blue">Bleu</option>
            <input class="submit" type="submit">
        </select>
    </form>


</body>

</html>