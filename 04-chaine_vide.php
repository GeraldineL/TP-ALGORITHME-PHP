<!-- # Écrire une fonction qui prend une chaîne de caractères en paramètre
# et retourne "vide" si la chaîne est vide sinon "non vide",
# Ensuite, affichez le résultat suivi d'un saut de ligne. -->

<?php
function checkEmpty($inputString) {
    if (empty($inputString)) {
        return "vide";
    } else {
        return "non vide";
    }
}

$stringToCheck = ""; // 

$result = checkEmpty($stringToCheck);

echo $result . "\n";
?>
