<!-- # Créez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit parcourir le tableau pour trouver et renvoyer la valeur maximale.
# Utilisez la fonction avec un tableau de nombres de votre choix. 
# Affichez la valeur maximale dans le terminal. -->

<?php
function trouverMaximum($numbers) {
    return max($numbers);
}

$numberArray = array(15, 8, 23, 42, 5); 

$maxValue = trouverMaximum($numberArray);

echo "La valeur maximale dans le tableau est : $maxValue" . "\n";
?>
