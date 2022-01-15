<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Portfolio Thomas AYISSI</title>
    <link rel="stylesheet" href="decor/style.css" >
</head>

<body id="global">
<div class="container">

<?php
/*
Contrôleur frontal
*/
// chargement des dépendances
require_once "controler/config.php"; // configuration
// si on a un fichier de fonctions on le charge ici
// si on a besoin de se connecter à une base de donnée, on se connecte ici

//inclusion des variables et fonctions
//Erreur On avait deux notations de include. Sur mon ancien fichier
//Mes includes étaient écrits avec des parenthèses.
//Vérifier et harmoniser la nomenclature

// Routeur (identifier la signification de la ligne isset et)
// du pg qu il faut get. La résolution du problème peut venir de cet examen.

$pg=['vue/homepage.php'];
if(!Isset($_GET['pg'])){
    // chargement accueil
    //DIM9JAN2022 - Suppression de tous les "once" dans les include. Car cela ne semble pa logique. Une page peut être appelée plein de fois. Inutile de la charger "once"
    include "vue/homepage.php";
}else{
    // pas sur l'accueil //variable pg signalée indefinie
    switch($_GET['pg']){
        case "galerie":
            // import de la galerie
            include "vue/galerie.php";
            break;
        case "liens":
            // import des liens
            include "vue/liens.php";
            break;
        case "tutoriels":
            // import de la page des tutoriels
            include "vue/tutoriels.php";
            break;
        case "contact":
            // import de la page de contact
            include "vue/contact.php";
            break;
        case "admin":
            // import de l'admin
            include "vue/admin.php";
            break;
        case "cv":
            // import du cv
            include "vue/cv.php";
            break;

        default:
            // chargement de l'accueil
            include "vue/homepage.php";
    }
//    return $pg;
}
// si on fermer notre connexion, on le fait ici
/*mysqli_close($dbConnect); Variable à définir*/
?>

</body>
</html>