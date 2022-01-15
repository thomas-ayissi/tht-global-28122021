<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link href="../controler/apparence/styles/ProjetTiStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="mainwrapper">
    <header>
        <!--**************************************************************************
      LE HEADER COMMENCE ICI
      ****************************************************************************-->
        <!-- inclusion de l'entête du site -->
        <?php include_once "header.php"; session_start();?>
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
      <h3>Connexion dans l'espace utilisateurs</h3>
    <br>

      <div id="bannerImage"><img src="../controler/formes/vertPourAdmin.png" alt=""/></div>

      <br>


        <!--************************************************************************
      CONNEXION UTILISATEURS ICI
      ****************************************************************************-->
        <p>Si vous êtes déjà inscrit, connectez-vous</p>
        <form method="post" action="mon-script.php"
              enctype="application/x-www-form-urlencoded" name="inscription">

            <p>
                <label for="login">Votre login : </label>
                <input type="text" id="nom" login="nom">
            </p>
            <p>
                <label for="motdepasse">Votre mot de passe : </label>
                <input type="text" id="motdepasse" name="motdepasse">
            </p>

            <p>
                <input type="submit" name="envoyer" value="Envoyer" />
                &nbsp;
                <input type="reset" name="annuler" value="Annuler" />
            </p>

        </form>

        <div id="bannerImage"><img src="../controler/formes/vertPourAdminBas.png" alt=""/></div>
        <!--************************************************************************
      INSCRIPTION UTILISATEURS ICI
      ****************************************************************************-->
            <br>
   <p>Si vous n'êtes pas encore membre, inscrivez-vous :</p>
   <form method="post" action="mon-script.php"
enctype="application/x-www-form-urlencoded" name="inscription">
       <fieldset>
           <legend>Votre genre : </legend>
           <input type="radio" name="civilite"
value="feminin">Féminin<br>
           <input type="radio" name="civilite"
value="masculin">Masculin<br>
           <input type="radio" name="civilite"
value="non-binaire">Non-Binaire
       </fieldset>
       <p>
           <label for="nom">Votre nom : </label>
           <input type="text" id="nom" name="nom">
       </p>
       <p>
           <label for="nom">Votre prénom : </label>
           <input type="text" id="prenom" name="prenom">
       </p>
       <p>
           <label for="age">Votre âge : </label>
           <input type="number" id="age" name="age">
       </p>
       <p>
           <label for="age">Votre adresse mail : </label>
           <input type="email" id="email" name="email">
       </p>
       <p>
           <label for="date">Indiquez votre date de naissance :
</label>
           <input type="date" id="date" name="date">
       </p>
       <p>
           <label for="sport">Choisissez votre région :</label>
           <select id="sport">
               <option value="liste">Régions de Belgique</option>
               <option value="wallonie">Wallonie</option>
               <option value="bruxelles">Bruxelles</option>
               <option value="flandre">Flandre</option>

           </select> 
       </p> 
       <fieldset> 
           <legend>Dans quelle(s) catégorie(s) vous placez-vous ? </legend>
           <input type="checkbox" name="contributeur"
value="contributeur">Contributeur<br>
           <input type="checkbox" name="expert" value="expert"
checked>Expert<br>
           <input type="checkbox" name="etudiant"
value="etudiant">Etudiant<br>
           <input type="checkbox" name="enseignant"
value="enseignant">Enseignant
       </fieldset> 
       <p> 
           <input type="submit" name="envoyer" value="Envoyer" /> 
           &nbsp; 
           <input type="reset" name="annuler" value="Annuler" /> 
       </p> 
   </form>



      <br>

        <footer>
        <?php include_once "pied_de_page.php"; ?>
    </footer>

</div>
</body>
</html>
