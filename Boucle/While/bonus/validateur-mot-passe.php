<?php
$mdp = readline("saisie un mot de passe : ");

$taillemdp = strlen($mdp);
$nbLettre = 0;

$c1 = 0;
$c2 = 0;
$c3 = 0;
$c4 = 0;

if ($taillemdp >= 8){
    $c1 ++;
}

while (($taillemdp)!=$nbLettre){
    $lettre = substr($mdp, $nbLettre, 1);
    if (ctype_lower($lettre)){
        $c2 ++;
    }elseif(ctype_upper($lettre)) {
        $c3 ++;
    }elseif(is_numeric($lettre)){
        $c4 ++;
    }
    $nbLettre ++;
}

if (($c1>0)and($c2>0)and($c3>0)and($c4>0)){
    echo "Le mot de passe est valide";
}else{
    echo "Le mot de passe est invalide ta soeur";
}
