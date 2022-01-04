
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriels</title>
    <link type="text/css" rel="stylesheet" href="../decor/style.css" />
</head>

<body id="global">
<div class="container">





    <!-- inclusion de l'entête du site -->
    <?php include_once "header.php"; ?>
    <br>
    <br>
    <!-- inclusion de du titre du body du site -->
    <h1><?php include_once "titre_body.php"; ?></h1>

    <h2>Comparaison de tutoriels</h2>

    <p>Les deux tutoriels comparés ici concernent le sujet numéro 24 dans les termes de référence (TDR) du projet Ti. Le sujet 24 porte le titre « PHP/MySQL : comment réaliser une page en PHP avec une connexion à une base de données via mySQLi ».
        Les deux tutoriels comparés sont :
        <ol>
          <div>
              <li>Apprendre PHP - Connexion à une base de données MySQL avec MySQLi</li>
              <a href="https://www.youtube.com/watch?v=EgUoi3Uedtc">https://www.youtube.com/watch?v=EgUoi3Uedtc</a>
          </div>

              <li>Système d'enregistrement des utilisateurs utilisant la base de données PHP et MySQLi</li>
              <a href="https://quedulourd.com/systeme-denregistrement-des-utilisateurs-utilisant-la-base-de-donnees-php-et-mysqli/">https://quedulourd.com/systeme-denregistrement-des-utilisateurs-utilisant-la-base-de-donnees-php-et-mysqli/</a>
          </div>
        </ol>

        <h3>Tutoriel un : vidéo courte et percutante</h3>

        <p>Le premier tutoriel est une vidéo YouTube de 15 minutes. Il présente quelques limites et certains avantages.
        Son principal point négatif est qu’il est un tutoriel vidéo. Autrement dit, il faut souvent mettre la vidéo sur pause pour noter le code rédigé par la personne faisant la présentation. L’autre limite de ce tutoriel est qu’il insiste sur les limites de l’extension MySQLi.</p>
        <p>Passons aux avantages.</p>
        <p>D’abord, il « fait le job » comme l’on dit communément. En suivant les instructions données nous avons réussi à connecter un script PHP d’une de nos pages à une base de données.</p>
        <p>Ensuite, ce tutoriel est résumé, ce qui est important. Un quart d’heure, pas plus ! La vidéo va droit au but sans circonvolutions.</p>
        <p>Enfin, fait rare, cette vidéo ne commence pas par inciter l’internaute qui la visionne à s’abonner à la chaine YouTube de l’auteur et activer les notifications afin de rien rater des nouveautés. Les personnes agacées par « l’auto promotion » récurrente sur les chaines YouTube apprécieront ce tutoriel ne serait-ce que pour cette raison.</p>

        <h3>Tutoriel deux : trois contenus pour le prix d’un !</h3>
        Le second tutoriel est de type composite. En effet, il a une structure ternaire : texte explicatif, lignes de code et vidéo tout en bas de page.
        Les développeurs ayant la charmante réputation d’aimer les solutions facilitant la vie des internautes et éventuellement la leur, ils apprécieront le fait d’avoir juste à faire « Ctrl+C » et « Ctrl+V » pour respectivement copie et coller le code de ce tutoriel.</p>
        <p>Ce tutoriel a au moins deux points faibles.</p>
        <p>D’une part, la vidéo qu’il contient est longue (55 minutes).</p>
        <p>D’autre part, ce tutoriel contient plein d’informations globales. Ces dernières sont utiles, mais éloignent parfois l’utilisateur du sujet principal qui est la connexion à la base de données en utilisant MySQLi.</p>

        <h3>Lequel devez-vous choisir ?</h3>
        <p>Chacun de ces tutoriels a des avantages. En fait, aucun n’est réellement médiocre. Cependant, chacun correspondra à un profil précis.</p>
        <p>Ainsi, si vous avez rapidement besoin de la procédure de connexion à une base de données en utilisant MySQLi, alors optez pour le premier tutoriel.</p>
        <p>En revanche, si vous avez du temps et que vous désirez comprendre globalement les connexions entre vos pages PHP et les bases de données, alors choisissez le second tutoriel.</p>
    </p>





    <br>
    <br>
    <br>
    <!-- inclusion du bas de page du site -->
    <?php include_once "pied_de_page.php"; ?>


</body>
</html>


