<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Galerie</title>
 <link href="../controler/apparence/styles/ProjetTiStyle.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap -->
  <link href="../controler/decor/pourgalerie/css/bootstrap-4.4.1.css" rel="stylesheet">
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
            <h3>Galerie</h3>



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
                  <img class="d-block w-100" src="../controler/formes/caroussel1.png" alt="First slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Image 1 Thomas</h5>
                    <p>Description image 1</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../controler/formes/caroussel2.png" alt="Second slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Image 2 Thomas</h5>
                    <p>Description image 2</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../controler/formes/caroussel3.png" alt="Third slide">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Image 3 Thomas</h5>
                    <p>Description image 3</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Précédente</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Suivante</span>
              </a>
            </div>
          </div>
        </div>
        <hr>
      </div>

      <hr>
      <h2 class="text-center">QUELQUES IMAGES</h2>
      <hr>
      <div class="container">
        <div class="row text-center">
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/formes/violetFoncePourCartesGalerie.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Carte 1</h5>
                <p class="card-text">Chacune de ces cartes vous présente un projet.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/formes/violetFoncePourCartesGalerie.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Carte 2</h5>
                <p class="card-text">Chacune de ces cartes vous présente un projet.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/formes/violetFoncePourCartesGalerie.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Carte 3</h5>
                <p class="card-text">Chacune de ces cartes vous présente un projet.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center mt-4">
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/formes/violetFoncePourCartesGalerie.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Carte 4</h5>
                <p class="card-text">Chacune de ces cartes vous présente un projet.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/formes/violetFoncePourCartesGalerie.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Carte 5</h5>
                <p class="card-text">Chacune de ces cartes vous présente un projet.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 pb-1 pb-md-0">
            <div class="card">
              <img class="card-img-top" src="../controler/formes/violetFoncePourCartesGalerie.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Carte 6</h5>
                <p class="card-text">Chacune de ces cartes vous présente un projet.</p>
                <a href="#" class="btn btn-primary">En savoir plus</a>
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


    <footer> 

        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-4.4.1.js"></script>

        <br>

            <!-- inclusion du bas de page du site -->
            <?php include_once "pied_de_page.php"; ?>
        </footer>

  </div>
</body>
</html>
