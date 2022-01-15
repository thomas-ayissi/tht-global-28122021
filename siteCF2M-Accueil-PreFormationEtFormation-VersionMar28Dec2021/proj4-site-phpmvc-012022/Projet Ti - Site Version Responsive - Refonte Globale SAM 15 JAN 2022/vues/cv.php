<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CV</title>
  <link href="../controler/apparence/styles/ProjetTiStyle.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="mainwrapper">
  <header>
      <!--**************************************************************************
    LE HEADER COMMENCE ICI
    ****************************************************************************-->
    <!-- inclusion de l'entête du site -->
    <?php include_once "header.php"; ?>
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

      <h3>Curriculum Vitae</h3>
        <div id="bannerImage"><img src="../controler/formes/vertPourCv.png" alt=""/></div>
      <hr>
      <div class="row">
        <div class="col-6">
          <h1>Thomas AYISSI</h1>
        </div>
        <div class="col-6">
          <p class="text-right"><a href="">Télécharger mon CV</a></p>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <div class="media">
            <img class="mr-3" src="../controler/formes/vertPourCvPetit.png" alt="Generic placeholder image">
            <div class="media-body">
              <h5 class="mt-0">Développeur</h5>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="row justify-content-md-around m-1">
            <address>
              <strong>Thomas AYISSI</strong><br>
              Saint-Gilles 1060<br>
              Bruxelles<br>
              <abbr title="Phone"> GSM :</abbr> 0467 00 00 00<br>
              <a href="mailto:#">mail_de_thomas@thomasayissi.tech</a>
            </address>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <h2>Formation</h2>
          <hr>
          <div class="row">
            <div class="col-6">
              <h4>CF2M Saint Gilles</h4>
            </div>
            <div class="col-6">
              <h5 class="text-right"><span aria-hidden="true"></span> Mai 2021 - Mai 2022</h5>
            </div>
          </div>
          <h5><span class="badge badge-secondary">Formation Qualifiante</span></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
        </div>
        <div class="col-md-6 col-sm-12">
          <h2>Compétences</h2>
          <hr>
          <div class="progress mt-4">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> HTML</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"> CSS</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;;"> JAVASCRIPT</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> PHP</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%;"> WORDPRESS</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"> PHOTOSHOP</div>
          </div>
          <div class="progress mt-4">
            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"> ILLUSTRATOR</div>
          </div>
        </div>
      </div>
      <hr>
      <h2>Stages en entreprise</h2>
      <hr>
      <div class="row">
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-5">
              <h4>Entreprise 1</h4>
            </div>
            <div class="col-6">
              <h5 class="text-right"><span aria-hidden="true"></span> Mai 2022 - Mai 2022</h5>
            </div>
          </div>
          <h5><span class="badge badge-secondary">Développeur</span></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
          <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet, consectetur.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="row">
            <div class="col-5">
              <h4>Entreprise 2</h4>
            </div>
            <div class="col-6">
              <h5 class="text-right"><span aria-hidden="true"></span> Mai 2022 - Mai 2022</h5>
            </div>
          </div>
          <h5><span class="badge badge-secondary">Développeur</span></h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, recusandae, corporis, tempore nam fugit deleniti sequi excepturi quod repellat laboriosam soluta laudantium amet dicta non ratione distinctio nihil dignissimos esse!</p>
          <ul>
            <li>Lorem ipsum dolor sit amet.</li>
            <li>Lorem ipsum dolor sit amet, consectetur.</li>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing.</li>
          </ul>
        </div>
      </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../decor/js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../decor/js/popper.min.js"></script>
    <script src="../../decor/js/bootstrap-4.4.1.js"></script>

    <br>

    <!-- inclusion du bas de page du site -->
    <?php include_once "pied_de_page.php"; ?>

  </div>
</div>
</body>
</html>
