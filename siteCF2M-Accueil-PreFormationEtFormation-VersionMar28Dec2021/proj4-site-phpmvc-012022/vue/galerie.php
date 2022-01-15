<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerie</title>
    <link type="text/css" rel="stylesheet" href="../decor/style.css" />

    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
    </head>

    <body id="global">
    <div class="container">

        <!-- inclusion de l'entête du site -->
        <?php include_once "header.php"; ?>
        <br>
        <br>
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
                            <img class="d-block w-100" src="images/1920x500.gif" alt="First slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Item 1 Heading</h5>
                                <p>Item 1 Description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/1920x500.gif" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Item 2 Heading</h5>
                                <p>Item 2 Description</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="images/1920x500.gif" alt="Third slide">
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
                    <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-1 pb-md-0">
                <div class="card">
                    <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-1 pb-md-0">
                <div class="card">
                    <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
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
                    <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-1 pb-md-0">
                <div class="card">
                    <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pb-1 pb-md-0">
                <div class="card">
                    <img class="card-img-top" src="images/400X200.gif" alt="Card image cap">
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
    <!-- inclusion du bas de page du site -->
    <?php include_once "pied_de_page.php"; ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>



</body>
</html>
