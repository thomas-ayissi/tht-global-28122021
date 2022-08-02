


<body id="global">
<div class="container">



    <!-- inclusion de l entête du site -->
    <?php include_once "header.php"; ?>
    <br>
    <br>
    <h1><?php include_once "titre_body.php"; ?></h1>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


<?php
/* Script name: buildForm
 * Description: Uses the form to create a simple HTML form
 */
require_once("formClass.php");
echo "<html><head><title>Phone form</title></head><body>";
$contact_form = new Form("process.php","Soumettre le formulaire");
$contact_form->addField("first_name","Prénom");
$contact_form->addField("last_name","Nom");
$contact_form->addField("phone","Téléphone");
$contact_form->addField("email","Adresse mail");
$contact_form->addField("comment","Votre message");
echo "<h3>Merci de remplir le formulaire de contact ci-dessous :</h3>";
$contact_form->displayForm();
echo "</body></html>";
?>


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
    <!-- inclusion du bas de page du site -->
    <?php include_once "pied_de_page.php"; ?>



    <!--h2>Contactez nous</h2>
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
    <br /-->
</div>
</body>
</html>

