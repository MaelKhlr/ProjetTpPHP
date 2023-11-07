<?php
$date = date('d-m-y');
$heure = date("H:i:s");
echo "Aujourd'hui nous somme le $date \n";
echo "Il est actuellement $heure\n";
if ($heure<=13) {
echo"Je vous souhaite une bonne matinée ! ";
} else {
echo "Je vous souhaite un bon après-midi ! ";
}
