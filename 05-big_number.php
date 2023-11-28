<!-- # Écrire une fonction qui prend deux nombres en paramètre
# et retourne le plus grand des deux.
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php
function trouverMax($number1, $number2) {
    return max($number1, $number2);
}

$num1 = 10; 
$num2 = 7;  

$maxNumber = trouverMax($num1, $num2);

echo $maxNumber . "\n";
?>
