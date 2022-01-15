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
  <script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<div id="mainwrapper">
  <header> 
    <!--**************************************************************************
    Header starts here.
    ****************************************************************************-->
    <header>
      <!-- inclusion de l'entête du site -->
      <?php include_once "header.php";

    var_dump($_POST);


    ?>
      <br>
      <br>
  </header>
  <div id="content">
    <div class="notOnDesktop"> 
      <!-- This search box is displayed only in mobile and tablet laouts and not in desktop layouts -->
      <input type="text" placeholder="Search">
    </div>
    <section id="mainContent"> 
      <!--************************************************************************
    Main Blog content starts here
    ****************************************************************************-->
      <h1><?php include_once "titre_body.php"; ?></h1>

      <h3><!-- Tagline -->SOME AWESOME HERO TAGLINE</h3>
      <div id="bannerImage"><img src="../controler/apparence/images/SliderLayerImage.png" alt=""/></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
      <aside id="authorInfo"> 
        <!-- The author information is contained here -->
        <h2>Contactez nous</h2>
        <form action="" method="post">
          <div class=" ">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
            <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
          </div>
          <div class=" ">
            <label for="message" class="form-label">Votre message</label>
            <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea" row="4" cols="20"></textarea>
          </div>
          <button type="submit" class=" ">Envoyer</button>
        </form>
        <br />
  </div>

    <br>
    <br>
    <br>
    <!-- inclusion du bas de page du site -->
    <?php include_once "pied_de_page.php"; ?>
</body>
</html>

</aside>
    </section>
    <section id="sidebar"> 
      <!--************************************************************************
    Sidebar starts here. It contains a searchbox, sample ad image and 6 links
    ****************************************************************************-->
      <input type="text" placeholder="Search">
      <div id="adimage"><img src="../controler/apparence/images/300x250.gif" alt=""/></div>
      <nav>
        <ul>
          <li><a href="#" title="Link">Link1</a></li>
          <li><a href="#" title="Link">Link2</a></li>
          <li><a href="#" title="Link">Link3</a></li>
          <li><a href="#" title="Link">Link4</a></li>
          <li><a href="#" title="Link">Link5</a></li>
          <li><a href="#" title="Link">Link6</a></li>
        </ul>
      </nav>
    </section>
    <footer> 
      <!--************************************************************************
    Footer starts here
    ****************************************************************************-->
      <article>
        <h3>Footer1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </article>
      <article>
        <h3>Footer2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </article>
    </footer>
  </div>
  <div id="footerbar"><!-- Small footerbar at the bottom --></div>
</div>
</body>
</html>
