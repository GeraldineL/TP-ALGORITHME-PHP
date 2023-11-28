<!-- # Créez une fonction nommée 'r' qui prend un paramètre. 
# Cette fonction devrait être réutilisable afin d'abréger l'utilisation 
# de 'print_r()'. -->

<?php
function r($variable) {
    print_r($variable);
}

// Exemple 
$exempleVar = array('pomme', 'banane', 'orange');
r($exempleVar);
?>
