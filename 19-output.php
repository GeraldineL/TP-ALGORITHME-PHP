<!-- # Écrivez une fonction qui prend en paramètre un texte et un nom de fichier. 
# La fonction doit ouvrir le fichier en mode écriture. 
# Ecrire le texte dans le fichier.
# Puis fermer le fichier. 
# Ensuite, créez un fichier nommé ecrire_dans_fichier.php et 
# utilisez la fonction ecrireDansFichier avec un texte de votre choix. 
# Vérifiez ensuite le fichier pour vous assurer que le texte a été correctement 
# écrit. -->

<?php
function ecrireDansFichier($texte, $nomFichier) {
    $fichier = fopen($nomFichier, 'w');

    if ($fichier) {
        fwrite($fichier, $texte);
        fclose($fichier);
        echo "Le texte a été écrit dans le fichier avec succès." . "\n";
    } else {
        echo "Erreur lors de l'ouverture du fichier." . "\n";
    }
}

// Exemple 
$texteAEcrire = "J'espere que mon code fonctionne et que j'aurai une bonne note 😎😁";
$nomDuFichier = "mon_fichier.txt";

ecrireDansFichier($texteAEcrire, $nomDuFichier);
?>
