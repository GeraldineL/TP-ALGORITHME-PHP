<!-- # Écrivez une fonction qui prend en paramètre un tableau de nombres. 
# La fonction doit renvoyer un nouveau tableau contenant les mêmes 
# nombres, mais dans l'ordre inverse. 
# Affichez le tableau original et le tableau inversé dans le terminal -->

<?php
function inverseTableau($numbers) {
    return array_reverse($numbers);
}

$originalArray = array(1, 2, 3, 4, 5); 

$reversedArray = inverseTableau($originalArray);

echo "Tableau original : " . implode(', ', $originalArray) . PHP_EOL;
echo "Tableau inversé : " . implode(', ', $reversedArray) . PHP_EOL;
?>
