<?php
$prix=readline("Saisir un prix :");
$fondRouge = "\033[41m";
$normal = "\033[0m";
if ($prix<1000) {
    $prixtaxe1 = $prix*0.05;
    $prixavecremise1 = $prix - $prixtaxe1;
    $prixformater1 = number_format($prixavecremise1, 2, ',', ' ');
    echo "La remise est de 5% soit $fondRouge $prixtaxe1 $normal euros sur le prix de l'article";
    echo"Le montant de l'article après remise est de $fondRouge $prixformater1 $normal";
} elseif ($prix>1000&&$prix<5000) {
    $prixtaxe2 = $prix*0.10;
    $prixavecremise2 = $prix - $prixtaxe2;
    $prixformater2 = number_format($prixavecremise2, 2, ',', ' ');
    echo "La remise est de 10% soit $fondRouge $prixtaxe2 $normal euros sur le prix de l'article";
    echo"Le montant de l'article après remise est de $fondRouge $prixformater2 $normal";
} else {
    $prixtaxe3 = $prix*0.20;
   $prixavecremise3 = $prix - $prixtaxe3;
    $prixformater3 = number_format($prixavecremise3, 2, ',', ' ');
    echo "La remise est de 10% soit $fondRouge $prixtaxe3 $normal euros sur le prix de l'article";
    echo "Le montant de l'article après remise est de $fondRouge $prixformater3 $normal";
}