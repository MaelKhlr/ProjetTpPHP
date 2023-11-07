<?php

for ($nombre = 1;$nombre <= 100; $nombre++){
    if ($nombre % 2 == 0){
        echo " $nombre ";
    }
}

echo PHP_EOL;
echo PHP_EOL;
$nombremax = readline ("saisie le nombre max : ");
for ($nombre = 1;$nombre <= $nombremax; $nombre++) {
    if ($nombre % 2 == 0) {
        echo " $nombre ";
    }
}
