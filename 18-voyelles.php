<!-- # Créez une fonction qui prend en paramètre une chaîne de caractères.
# Cette fonction devrait compter le nombre de voyelles présentes dans la chaîne 
# (en considérant seulement les voyelles 'a', 'e', 'i', 'o', 'u', 'A', 
# 'E', 'I', 'O', 'U'). 
# Utilisez la fonction compterVoyelles avec une chaîne de texte de votre choix. 
# Affichez le nombre de voyelles dans le terminal. -->

<?php
function compteVoyelles($inputString) {
    $voyelles = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;

    foreach (str_split($inputString) as $char) {
        if (in_array($char, $voyelles)) {
            $count++;
        }
    }

    return $count;
}

$textToCount = "Courage, bientôt la fin des exercices!"; 

$voyelleCount = compteVoyelles($textToCount);

echo "Le nombre de voyelles dans la chaîne est : $voyelleCount" . "\n";
?>
