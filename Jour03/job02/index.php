<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

for ($i = 0; isset($str[$i]); $i = $i + 2) {
    // if ($i % 2 == 0) {
    echo $str[$i];
}
