<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";
$tabvoy = ['a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U', 'y', 'Y'];

for ($i = 0; isset($str[$i]); $i++) {
    foreach ($tabvoy as $voyelles)

        if ($str[$i] == $voyelles) {
            echo $str[$i];
        }
}
