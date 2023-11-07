<?php
$phrase = readline("Sasie une phrase en miniscule ou sera compter les consonnes et les voyelles : ");

$voyelles = 0;
$consonnes = 0;
$lettrevoyelles = "a, e, i, o, u, y";

$lettre = 0;
$longueur = strlen($phrase);

while($lettre < $longueur) {
    $caractere = substr($phrase, $lettre, 1);
if ( strpos($lettrevoyelles, $caractere) == true ){
        $voyelles++;
    }else {
            $consonnes++;
        }
    $lettre++;
}

echo"nombre de consomme :  $consonnes ";
echo PHP_EOL;
echo"nombre de voyelles :  $voyelles ";