<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liens</title>
  <link href="../controler/apparence/styles/ProjetTiStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="mainwrapper">
    <header>
        <!--**************************************************************************
      LE HEADER COMMENCE ICI
      ****************************************************************************-->
        <!-- inclusion de l'entête du site -->
        <?php include_once "header.php";?>
        <br>
        <br>
    </header>
    <div id="content">
        <div class="notOnDesktop">
            <!-- boite de recherche visible uniquement sur tablettes et smartphone -->
            <input type="text" placeholder="Recherche">
        </div>
        <section id="mainContent">

            <!--************************************************************************
                 LE CONTENU GLOBAL DE LA PAGE DE CE SITE PROJET Ti COMMENCE ICI
              ****************************************************************************-->
            <h1><?php include_once "titre_body.php"; ?></h1>
            <h3>Quelques sites intéressants</h3>

            <div id="bannerImage"><img src="../controler/formes/bleuPourLiens.png" alt=""/></div>
            <br>

      <p>La plupart des sites répertoriés ici sont bien connus des apprenants.</p>
      <ol>
        <li><a href="https://developer.mozilla.org/fr/">Mozilla</a></li>
        <li><a href="https://www.w3schools.com">W3Schools</a></li>
        <li><a href="https://www.youtube.com/c/CSDojo">Code Dojo</a></li>
      </ol>


      <p></p>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
        <br>

        <footer>
            <?php include_once "pied_de_page.php"; ?>
        </footer>

  </div>
</body>
</html>
