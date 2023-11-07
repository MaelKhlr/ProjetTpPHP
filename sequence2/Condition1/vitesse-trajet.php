<?php
$distance=readline("saisir une distance (kms) : ");
$duree=readline("saisir une durée (h:mm) : ");
$heure=substr($duree,0, 1);
$minute=substr($duree,2,4);
$decimal= $heure + ($minute/60);
if ($minute < 60) {
$dureeminute = $heure*60 + $minute;
$vitesse=)$distance/$dureeminute)* 60;
echo "La vitesse moyenne du trajet est de $vitesse km/h";
echo PHP_EOL;


