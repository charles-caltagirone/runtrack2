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

    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

    // $dic = [
    $tab_cons = ['b', 'B', 'c', 'C', 'd', 'D', 'f', 'F', 'g', 'G', 'h', 'H', 'j', 'J', 'k', 'K', 'l', 'L', 'm', 'M', 'n', 'N', 'p', 'P', 'q', 'Q', 'r', 'R', 's', 'S', 't', 'T', 'v', 'V', 'w', 'W', 'x', 'X', 'z', 'Z'];
    $tab_voy = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'Y'];
    // ];

    $compteur_cons = 0;
    $compteur_voy = 0;

    for ($i = 0; isset($str[$i]); $i++) {
        for ($x = 0; isset($tab_cons[$x]); $x++) {
            if ($str[$i] == $tab_cons[$x]) {
                $compteur_cons++;
            }
        }
        for ($y = 0; isset($tab_voy[$y]); $y++) {
            if ($str[$i] == $tab_voy[$y]) {
                $compteur_voy++;
            }
        }
    }




    ?>
    <table style="width: 1px;" border="1">
        <tr>
            <td>Consonnes</td>
            <td>Voyelles</td>
        </tr>

        <tr>
            <td><?php
                echo $compteur_cons;
                ?>
            </td>
            <td><?php
                echo $compteur_voy;
                ?></td>
        </tr>
    </table>


</body>

</html>