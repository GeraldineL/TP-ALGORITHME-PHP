<!-- # Écrire une fonction qui prend un nombre en paramètre
# et return "positif" si le nombre est positif, ou bien "négatif" si le nombre
# est negatif ou "nul" si le nombre est null.
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php
function checkNumber($number) {
    if ($number > 0) {
        return "positif";
    } elseif ($number < 0) {
        return "négatif";
    } else {
        return "nul";
    }
}

$testNumber = 30; 

$result = checkNumber($testNumber);

echo $result . "\n";
?>
