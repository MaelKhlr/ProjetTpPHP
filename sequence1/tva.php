<?php
$prixht = readline("Donne un prix hors taxe :");
$tauxtva = readline("Donne un taux de tva en pourcentage :");
$prixtva = $prixht*($tauxtva/100);
echo "Le prix avec taxe : ". round($prixht+$prixtva, 2);