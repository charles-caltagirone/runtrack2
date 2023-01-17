<?php

function leetSpeak($str = '')
{
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == 'a' || $str[$i] == 'A') {
            $str[$i] = 4;
        } elseif ($str[$i] == 'b' || $str[$i] == 'B') {
            $str[$i] = 8;
        } elseif ($str[$i] == 'e' || $str[$i] == 'E') {
            $str[$i] = 3;
        } elseif ($str[$i] == 'g' || $str[$i] == 'G') {
            $str[$i] = 6;
        } elseif ($str[$i] == 'l' || $str[$i] == 'L') {
            $str[$i] = 1;
        } elseif ($str[$i] == 't' || $str[$i] == 'T') {
            $str[$i] = 7;
        }
    }
    return $str;
}

$a = 'Bonjour à tous les noob ! Go lvl up';

echo leetSpeak($a);
