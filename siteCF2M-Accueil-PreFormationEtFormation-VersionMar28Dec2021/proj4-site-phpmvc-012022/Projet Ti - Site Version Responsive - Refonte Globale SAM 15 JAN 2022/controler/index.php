
<body>
<div id="mainwrapper">
    <header>
  <?php
/*
Contrôleur frontal
*/
// chargement des dépendances
require_once "config.php"; // configuration
// si on a un fichier de fonctions on le charge ici
// si on a besoin de se connecter à une base de donnée, on se connecte ici

//inclusion des variables et fonctions
//Erreur On avait deux notations de include. Sur mon ancien fichier
//Mes includes étaient écrits avec des parenthèses.
//Vérifier et harmoniser la nomenclature

// Routeur (identifier la signification de la ligne isset et)
// du pg qu il faut get. La résolution du problème peut venir de cet examen.
  // UPDATE SAM 15 JAN 2022 - ancienne valeur ligne ci-dessous $pg=['vue/homepage.php'];
$pg=['../vue/homepage.php'];
if(!Isset($_GET['pg'])){
    // chargement accueil
    //DIM9JAN2022 - Suppression de tous les "once" dans les include. Car cela ne semble pa logique. Une page peut être appelée plein de fois. Inutile de la charger "once"
    include "../vues/homepage.php";
}else{
    // pas sur l'accueil //variable pg signalée indefinie
    switch($_GET['pg']){
        case "galerie":
            // import de la galerie
            include "../vues/galerie.php";
            break;
        case "liens":
            // import des liens
            include "../vues/liens.php";
            break;
        case "tutoriels":
            // import de la page des tutoriels
            include "../vues/tutoriels.php";
            break;
        case "contact":
            // import de la page de contact
            include "../vues/contact.php";
            break;
        case "admin":
            // import de l'admin
            include "../vues/admin.php";
            break;
        case "cv":
            // import du cv
            include "../vues/cv.php";
            break;

        default:
            // chargement de l'accueil
            include "../vues/homepage.php";
    }
//    return $pg;
}
// si on fermer notre connexion, on le fait ici
/*mysqli_close($dbConnect); Variable à définir*/
?>

</body>
</html>
