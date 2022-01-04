<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="decor/style.css" >
</head>

<?php
/*
Contrôleur frontal
*/
// chargement des dépendances
require_once "data/config.php"; // configuration
// si on a un fichier de fonctions on le charge ici
// si on a besoin de se connecter à une base de donnée, on se connecte ici

//inclusion des variables et fonctions
//Erreur On avait deux notations de include. Sur mon ancien fichier
//Mes includes étaient écrits avec des parenthèses.
//Vérifier et harmoniser la nomenclature

// Routeur (identifier la signification de la ligne isset et
// du pg qu il faut get. La résolution du problème peut venir de cet examen.

$pg=['vue/homepage.php'];
if(!Isset($_GET['pg'])){
    // chargement accueil
    include_once "vue/homepage.php";

}else{
    // pas sur l'accueil //variable pg signalée indefinie
    switch($_GET['pg']){
        case "gallery":
            // import de la galerie
            include_once "vue/galerie.php";
            break;
        case "liaisons":
            // import des lens
            include_once "vue/liens.php";
            break;
        case "tutorials":
            // import de la page des tutoriels
            include_once "vue/tutoriels.php";
            break;
        case "contacts":
            // import de la page de contact
            include_once "vue/contact.php";
            break;
        case "administration":
            // import de l'admin
            include_once "vue/admin.php";
            break;
        case "CV":
            // import du cv
            include_once "vue/cv.php";
            break;

        default:
            // chargement de l'accueil
            include_once "vue/homepage.php";
    }
//    return $pg;
}
// si on fermer notre connexion, on le fait ici
?>

</body>
</html>