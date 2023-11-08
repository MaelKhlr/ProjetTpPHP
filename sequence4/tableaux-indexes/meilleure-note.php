<?php
// sans boucle
$notes=[10,12.5,14,7,15,9.5,8];
echo max($notes);
echo"\n";
// avec boucle
$meilleureNote = 0;
for ($i = 0; $i < count($notes); $i++) {
    if ($notes[$i] > $meilleureNote) {
        $meilleureNote = $notes[$i];
    }
}
echo "La meilleure note est de : $meilleureNote";
