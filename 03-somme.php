<!-- # Écrivez une fonction prenant deux paramètres, 'nb1' et 'nb2', 
# représentant des nombres. Cette fonction devrait additionner ces deux nombres 
# et retourner le résultat. 
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php
function somme($nb1, $nb2) {
    return $nb1 + $nb2;
}

$number1 = 5; 
$number2 = 7; 

$result = somme($number1, $number2);

echo $result . "\n";
?>
