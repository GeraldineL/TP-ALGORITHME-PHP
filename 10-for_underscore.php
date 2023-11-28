<!-- # Créez une fonction qui affiche un message qui return la date du jours
# (d/m/y) Puis affichez le résultat suivi d'un saut de ligne. -->

<?php
function afficheDatedujour() {
    $currentDate = date('d/m/Y');
    echo $currentDate . "\n";
}

afficheDatedujour();
?>
