<?php
function bonjour($jour)
{
    if ($jour) {
        return "Bonjour";
    } else {
        return "Bonsoir";
    }
}
$x = false;
echo bonjour($x);
