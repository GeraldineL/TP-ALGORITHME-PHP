<!--# Écrivez une fonction qui prend en paramètre une chaîne 
# de caractères et retourne cette chaîne inversée. 
 
# Utilisez la fonction avec une chaîne de texte de votre choix. 
# Ensuite, affichez le résultat suivi d'un saut de ligne.  -->

<?php
function chaineInversee($inputString) {
    return strrev($inputString);
}

$textToReverse = "Tout est possible à celui qui croit"; 

$reversedText = chaineInversee($textToReverse);

echo $reversedText . "\n";
?>
