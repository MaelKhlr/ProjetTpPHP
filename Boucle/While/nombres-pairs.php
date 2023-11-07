<?php
//programme qui ecrit tout les nombres pairs entre 0 et 100
$nombre = 0;
while ($nombre <=100){
echo $nombre.' ';
$nombre=$nombre+2;
}
echo PHP_EOL;
echo PHP_EOL;

//programme qui ecrit les nombres pairs entre 0 et le chiffre saisie
$nombre = 0;
$nombre1 = readline("saisir un nombre ");
while ($nombre <=$nombre1){
    echo $nombre.' ';
    $nombre=$nombre+2;
    }

echo PHP_EOL;
echo PHP_EOL;

//programme qui ecrit les nombres pairs entre 0 et le c
$nombre = 0;
$nombre1 = readline("saisir un nombre ");
$somme = 0;
while ($nombre <=$nombre1){
    echo $nombre.' ';
    $somme = $somme+$nombre;
    $nombre=$nombre+2;
}
echo $somme;