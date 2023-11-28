<!-- # Créez une fonction qui affiche un message, par exemple 'Hello'. 
# Utilisez une boucle pour afficher le résultat de cette fonction 10 fois." -->

<?php
function afficheMessage() {
    echo 'Bonjour Francis, merci pour tes explications de cours super claires' . "\n";
}

for ($i = 0; $i < 10; $i++) {
    afficheMessage();
}
?>
