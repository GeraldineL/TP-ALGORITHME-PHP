<!-- # Créez une fonction qui prend en paramètre un nom de fichier. 
# Doit ouvrir le fichier en mode lecture si le fichier existe.
# Lire son contenu. 
# Puis fermer le fichier. 
# Ensuite, créez un fichier nommé lire_fichier.php et 
# utilisez la fonction lireFichier avec le nom d'un fichier de votre choix. 
# Affichez ensuite le contenu lu dans le terminal. -->

<?php
function lireFichier($nomFichier) {
    if (file_exists($nomFichier)) {
        $fichier = fopen($nomFichier, 'r');

        if ($fichier) {
            $contenu = fread($fichier, filesize($nomFichier));
            fclose($fichier);
            return $contenu;
        } else {
            return "Erreur lors de l'ouverture du fichier.";
        }
    } else {
        return "Le fichier n'existe pas.";
    }
}

// Exemple 
$nomDuFichierALire = "mon_fichier.txt"; 

$contenuLu = lireFichier($nomDuFichierALire);

echo "Contenu du fichier : " . "\n";
echo $contenuLu . "\n";
?>
