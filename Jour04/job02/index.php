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
                if (isset($_GET['first']) == null) {
                    $_GET['first'] = '';
                }
                echo $_GET['first'];

                ?>
            </td>
        </tr>
        <tr>
            <td>Nom</td>
            <td>
                <?php
                if (isset($_GET['last']) == null) {
                    $_GET['last'] = '';
                }
                echo $_GET['last'];
                ?>
            </td>
        </tr>
    </table>
</body>

</html>