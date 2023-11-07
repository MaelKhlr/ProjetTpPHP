<?php
$l = readline("saisie la largeur du rectangle: ");
$h = readline ("saisie la hauteur du rectangle: ");
for($hauteur=1;$hauteur<=$l;$hauteur++){
    for($largeur=1;$largeur<=$h;$largeur++){
        echo " * ";
    }
    echo PHP_EOL;
}
