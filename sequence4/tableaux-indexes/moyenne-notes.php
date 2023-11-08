<?php
$notes=[10,12.5,14,7,15,9.5,8];
$moyennes=array_sum($notes)/count($notes);
echo "la moyenne est de $moyennes";
echo "\n";
if ($moyennes<10){
    echo" Vous n'avez pas votre diplôme ";
} elseif ($moyennes>10 && $moyennes<12){
    echo"mention passable";
} elseif ($moyennes>12 && $moyennes<14){
    echo"Mention assez bien";
} elseif ($moyennes>14 && $moyennes<16){
    echo"Mention bien";
} else {
    echo "Mention très bien";
}
