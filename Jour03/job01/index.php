<?php

$x = [200, 204, 173, 98, 171, 404, 459];
foreach ($x as $key => $x)
    if ($x % 2 == 0)
        echo "$x est pair <br>";
    else
        echo "$x est impair <br>";
