<!-- # Créez une fonction qui prend en paramètre une lettre 
# Et une chaîne de caractères. La fonction doit retourner le nombre d'occurrences 
# De la lettre dans la chaîne, sans distinction de casse. 
# Utilisez la fonction avec une lettre et une chaîne de texte de votre choix. 
# Affichez le résultat dans le terminal. -->

<?php
function compterLettres($letter, $inputString) {
    $lowercaseLetter = strtolower($letter);
    $lowercaseString = strtolower($inputString);

    return substr_count($lowercaseString, $lowercaseLetter);
}

$chosenLetter = 'a'; 
$textToSearch = "La sagesse d'un homme fait briller son visage"; 

$occurrences = compterLettres($chosenLetter, $textToSearch);

echo "Le nombre d'occurrences de la lettre '$chosenLetter' dans la chaîne est : $occurrences" . "\n";
?>
