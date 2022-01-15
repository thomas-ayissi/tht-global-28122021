<?php
/*La configuration du mail*/
if (!empty($_POST)) :
$email= filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
$text= strip_tags($_POST["textarea"]);
    $to      = 'MAIL';
    $subject = 'le sujet';
    $message = 'Bonjour !';
    $headers = 'From: '.$email . "\r\n" .
        'Reply-To: '.$email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
/*partie du code servant juste à faire la vérification, il faut la retirer avant de publier véritablement le site*/
    if(mail($to, $subject, $message, $headers)) :
        echo ("ok");
    else:
        echo ("non ok");
    endif;
endif;

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link href="../controler/apparence/styles/ProjetTiStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="mainwrapper">
    <header>
        <!--**************************************************************************
      LE HEADER COMMENCE ICI
      ****************************************************************************-->
            <!-- inclusion de l'entête du site -->
            <?php include_once "header.php";

            var_dump($_POST);

            ?>
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
            <h3>Nous envoyer un messsage</h3>

      <div id="bannerImage"><img src="../controler/formes/bleuPourContact.png" alt=""/></div>

            <br>
      <p>Vous voulez parler de votre futur projet de site Web ? </p>
      <p>Peut être désirez-vous simplement avoir un avis. Envoyez-nous un mail ci-dessous. Nous vous répondrons le plus vite possible. </p>
      <aside id="authorInfo"> 
        <!-- The author information is contained here -->
        <h2>Contactez nous</h2>
        <form action="" method="post">
          <div class=" ">
            <label for="email" class="form-label">Saisissez votre email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
            <div id="email-help" class="form-text">Vos données personnelles sont traitées conformément aux règlements de l'UE.</div>
          </div>
            <br>
            <br>
          <div class=" ">
            <label for="message" class="form-label">Saisissez votre message ci-dessous</label>
            <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea" row="4" cols="20"></textarea>
          </div>
          <button type="submit" class=" ">Envoyer</button>
        </form>
        <br />
  </div>

    <br>
    <br>

    <footer>
        <?php include_once "pied_de_page.php"; ?>
    </footer>

</div>
</body>
</html>
