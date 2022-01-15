<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galerie</title>
 <link href="../controler/apparence/styles/ProjetTiStyle.css" rel="stylesheet" type="text/css">
 <script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js" type="text/javascript"></script>
  <!-- Bootstrap -->
  <link href="../controler/decor/pourgalerie/css/bootstrap-4.4.1.css" rel="stylesheet">
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
      <h1><!-- Blog title -->Post Title</h1>
      <h3><!-- Tagline -->SOME AWESOME HERO TAGLINE</h3>
      <!-- inclusion de du titre du body du site -->
      <h1><?php include_once "titre_body.php"; ?></h1>


      <div class="container mt-3">
        <div class="row">
          <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                <li data-target="#carouselExampleControls" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../controler/decor/pourgalerie/images/1920x500.gif" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Item 1 Heading</h5>
                    <p>Item 1 Description</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../controler/decor/pourgalerie/images/1920x500.gif" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Item 2 Heading</h5>
                    <p>Item 2 Description</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../controler/decor/pourgalerie/images/1920x500.gif" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Item 3 Heading</h5>
                    <p>Item 3 Description</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
        <hr>
      </div>

      <hr>
      <h2 class="text-center">UNE PETITE GALERIE</h2>
      <hr>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/decor/pourgalerie/images/400X200.gif" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/decor/pourgalerie/images/400X200.gif" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/decor/pourgalerie/images/400X200.gif" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center mt-4">
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/decor/pourgalerie/images/400X200.gif" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/decor/pourgalerie/images/400X200.gif" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/decor/pourgalerie/images/400X200.gif" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h2 class="text-center">POUR PLUS D'INFOS VISITEZ LES AUTRES PAGES DU PORTFOLIO</h2>
      <hr>



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
        <!-- inclusion du bas de page du site -->
        <?php include_once "pied_de_page.php"; ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-4.4.1.js"></script>

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
