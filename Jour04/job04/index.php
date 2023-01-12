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
        <input type="text" name="first">
        <input type="text" name="last">
        <input type="submit" name="submit" id="submit">
    </form>

    <table style="width: 1px;" border="1">
        <tr>
            <td>Argument</td>
            <td>Valeur</td>
        </tr>
        <tr>
            <td>prénom</td>
            <td>
                <?php
                if (isset($_POST['first']) == null) {
                    $_POST['first'] = '';
                }
                echo $_POST['first'];

                ?>
            </td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>
                <?php
                if (isset($_POST['last']) == null) {
                    $_POST['last'] = '';
                }
                echo $_POST['last'];
                ?>
            </td>
        </tr>
    </table>

</body>

</html>