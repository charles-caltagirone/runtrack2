<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="submit" name="reset" value="reset">
    </form>

    <?php

    setcookie('user', 'nbvisites', time());

    if (isset($_COOKIE['nbvisites'])) {
        setcookie('nbvisites', $_COOKIE['nbvisites'] + 1);
        echo  $_COOKIE['nbvisites'];
    }
    if (isset($_GET['reset'])) {
        setcookie('nbvisites', 0);
    }
    ?>
</body>

</html>