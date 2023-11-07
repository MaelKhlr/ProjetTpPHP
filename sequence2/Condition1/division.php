<?php
$nombre=readline("Donne un nombre steuplé : ");
$nombre1=readline("Donne un nombre steuplé : ");
if ($nombre1==0) {
    echo "la divsion avec 0 est impossible ";
} else {
    $resultat=round($nombre/$nombre1,2);
    echo "Le résultat de la division de $nombre par $nombre1 est $resultat";
}