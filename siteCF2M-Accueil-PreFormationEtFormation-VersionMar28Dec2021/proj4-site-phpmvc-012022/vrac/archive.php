<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Thomas AYISSI</title>
    <link href="../decor/style.css" rel="stylesheet">
</head>
<body id="global">
<div class="container">




    <!-- inclusion des variables et fonctions -->
    <?php
    include_once('variables.php');
    include_once('functions.php');
    ?>

    <!-- inclusion de l'entête du site -->
    <?php include_once('includes/header.php'); ?>
    <br>
    <br>
    <h1><?php include_once('includes/titre_body.php'); ?></h1>

    <?php foreach(getTextes($textes) as $texte) : ?>
        <article>
            <h3><?php echo $texte['title']; ?></h3>
            <div><?php echo $texte['texte']; ?></div>
            <i><?php echo displayAuthor($texte['author'], $users); ?></i>
        </article>
    <?php endforeach ?>
</div>

<!-- inclusion du bas de page du site -->
<?php include_once('includes/pied_de_page.php'); ?>
</body>
</html>

/*
