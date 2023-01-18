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
    $x = 1000;
    for ($a = 2; $a <= $x; $a++) {
    $c=0;
            for ($b = 2; $b <= $a; $b++) {
            if (($a % $b) == 0 && $a != $b) {
            $c=1;}
        }
        if($c== 0){
            echo "$a<br>";
        }
    }
    ?>
</body>

</html>