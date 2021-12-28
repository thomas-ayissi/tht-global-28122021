<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link type="text/css" rel="stylesheet" href="../decor/style.css" />
</head>


<body id="global">
<div class="container">



    <!-- inclusion de l entête du site -->
    <?php include_once "header.php"; ?>
    <br>
    <br>
    <h1><?php include_once "titre_body.php"; ?></h1>



    <h2>Contactez nous</h2>
    <form>
        <div class=" ">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
            <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
        </div>
        <div class=" ">
            <label for="message" class="form-label">Votre message</label>
            <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
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

