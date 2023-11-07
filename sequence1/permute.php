<?php
$nombre1= readline("Donne Chiffre 1 :");
$nombre2= readline("Donne Chiffre 2 :");
echo "Nombre 1: $nombre1";
echo PHP_EOL;
echo "Nombre 2: $nombre2";
echo PHP_EOL;
$temp = $nombre1;
$nombre1 = $nombre2;
$nombre2 = $temp;
echo "Nombre 1 apres permutation: $nombre1";
echo PHP_EOL;
echo "Nombre 2 apres permutation: $nombre2";