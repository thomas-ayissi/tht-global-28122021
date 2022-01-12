<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../decor/style.css">
    </head>
    <body>
        <h1>Bases de données MySQL</h1>
        <?php

        // DB
        define("DB_HOST","thomasayissi.tech/sama_phpmyadmin");
        define("DB_NAME","xscy8035_base_php_2021");
        define("DB_LOGIN","xscy8035_khabaancoumba7208456");
        define("DB_PWD","o1nJMV1m7tP;");
        define("DB_PORT",3306);
        define("DB_ENCODE","utf8");

            $servername = '';
            $username = '';
            $password = '';

            //On établit la connexion
            $conn = mysqli_connect($servername='thomasayissi.tech/sama_phpmyadmin', $username=xscy8035_base_php_2021, $password='o1nJMV1m7tP;');

            //On vérifie la connexion
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
            echo 'Connexion réussie';
        ?>
    </body>
</html>