<!-- # Créez une fonction nommée 'v' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'var_dump()'. -->

<?php
function v($variable) {
    var_dump($variable);
}

// Exemple 
$exempleVar = "Hello, World!";
v($exempleVar);
?>
