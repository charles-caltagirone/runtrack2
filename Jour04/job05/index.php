<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="name">
        <input type="password" name="password">
        <input type="submit">
    </form>

    <?php

    foreach ($_POST as $key) {
        if ($_POST['name'] == "John" && $_POST['password'] == "Rambo") {
            echo "C’est pas ma guerre";
            break;
        } elseif ($_POST['name'] == null && $_POST['password'] == null) {
            echo "";
            break;
        } else {
            echo "Votre pire cauchemar";
            break;
        }
    }

    ?>


</body>

</html>