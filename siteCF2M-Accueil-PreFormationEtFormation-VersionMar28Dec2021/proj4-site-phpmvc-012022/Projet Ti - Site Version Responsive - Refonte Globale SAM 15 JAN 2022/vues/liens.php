<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Liens</title>
  <link href="../controler/apparence/styles/ProjetTiStyle.css" rel="stylesheet" type="text/css">
  <script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
</head>

<body>
<div id="mainwrapper">
  <header> 
    <!--**************************************************************************
    Header starts here. It contains Logo and 3 navigation links. 
    ****************************************************************************-->
    <!-- inclusion de l'entête du site -->
    <?php include_once "header.php"; ?>
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
      <!-- inclusion de du titre du body du site -->
      <h1><?php include_once "titre_body.php"; ?></h1>

        <div id="bannerImage"><img src="../controler/apparence/images/SliderLayerImage.png" alt=""/></div>
      <h2>Quelques sites intéressants</h2>
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
      <aside id="authorInfo"> 
        <!-- The author information is contained here -->
        <h2>Author Name</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
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
        <?php include_once "pied_de_page.php"; ?>
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
