<!--# Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "longue" si la longueur de la chaîne est supérieure à 10,
# sinon "courte".
# Ensuite, affichez le résultat suivi d'un saut de ligne.  -->

<?php
function StringLength($inputString) {
    if (strlen($inputString) > 10) {
        return "longue";
    } else {
        return "courte";
    }
}

$input = "Hello, World!"; 
$result = StringLength($input);

echo $result . "\n";
?>
