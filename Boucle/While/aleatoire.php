<?php
$nombre = readline("Saisie un nombre entre 0 et 1000 : ");
$aleatoire = random_int(0,1000);
$coups = 0;
while ($nombre > 1000){
    echo "Le nombre a deviner doit etre compris entre 0 et 1000";
    echo PHP_EOL;
    $nombre = readline("Saisie un nombre entre 0 et 1000 : ");
}
while ($aleatoire != $nombre){
    if ($coups==200){
        echo "Tu na pas deviner en moins de 200 coups";
        exit;
    }
    $aleatoire = random_int(0,1000);
    $coups = $coups + 1;
}
echo " Le nombre deviner a été trouvé en $coups";