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
    <link type="text/css" rel="stylesheet" href="../decor/style.css" />
</head>


<body id="global">
<div class="container">

<!--Fake Email à utiliser :  ambles_06_oddball@icloud.com UPDATE Sam 15 Jan 2022 - Utiliser plutot contact@thomasayissi.tech-->


    <!-- inclusion de l entête du site -->
    <?php include_once "header.php";

    var_dump($_POST);


    ?>

    <br>
    <br>
    <h1><?php include_once "titre_body.php"; ?></h1>



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

