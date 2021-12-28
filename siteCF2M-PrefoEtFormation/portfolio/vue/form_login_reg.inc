<?php
 /* File: form_login_reg.inc
  * Desc: Contains the code for a Web page that displays
  *       two HTML forms, side by side. One is a login
  *       form, and the second is a registration form. 
  */
include("functions.inc");	                                 #7
?>
    <head><title>Page de connexion des utilisateurs</title>
    <link type="text/css" rel="stylesheet" href="../decor/style.css" />

</head>
<body id="global">
<div class="container">
<?php	                                                    #52
$fields_1 =   array("fusername" => "Nom d'utilisateur",	          #53
                    "fpassword" => "Mot de passe"
                   );
$fields_2 =   array("user_name"      => "Nom d'utilisateur",	     #56
                    "password"       => "Mot de passe",
                    "email"          => "Email",
                    "first_name"     => "Prénom",
                    "last_name"      => "Nom",
                    "street"         => "Rue",
                    "city"           => "Ville",
                    "state"          => "Région",
                    "zip"            => "Code postal",
                    "phone"          => "GSM",
                    "fax"            => "Téléphone"
                   );	                                    #67
?>
<div id="wrapper">
  <div id="login">
   <form action=<?php echo $_SERVER['PHP_SELF']?>
         method="POST">
      <fieldset style='border: 2px solid #000000'>
        <legend>Formulaire de connexion</legend>
<?php	                                                    #75
        if (isset($message_1))	                           #76
        { 
          echo "<p class='errors'>$message_1</p>\n";
        }
        foreach($fields_1 as $field => $value)	           #80
        {
          if(preg_match("/pass/i",$field)) 
             $type = "password";
          else
             $type = "text";
          echo "<div id='field'>
            <label for='$field'>$value</label>
            <input id='$field' name='$field' type='$type' 
            value='".@$$field."' size='20' maxlength='50' />
            </div>\n";
        }	                                                #91
?>
        <input type="submit" name="Button" 
               style='margin-left: 45%; margin-bottom: .5em'
               value="Connexion" />
      </fieldset> 
    </form>
    <h3 style='text-align: center; margin: 1em'>
        Si vous avez déjà un compte, connectez-vous.</h3>
    <h3 style='text-align: center; margin: 1em'>
        Si vous n'avez pas encore de compte, inscrivez-vous.</h3>
  </div>
  <div id="reg">
    <form action=<?php echo $_SERVER['PHP_SELF']?>
          method="POST">
      <fieldset style='border: 2px solid #000000'>
       <legend>Formulaire d'enregistrement</legend>
<?php	                                                   #108
       if(isset($message_2))	                            #109
       {
         echo "<p class='errors'>$message_2</p>\n";
       }
       foreach($fields_2 as $field => $value)	           #113
       {
         if($field == "state")	                          #115
         {
           echo "<div id='field'>
             <label for='$field'>$value</label>
             <select name='state' id='state'>"; 
             $stateName=getStateName();
             $stateCode=getStateCode();
             for ($n=1;$n<=4;$n++)
             {
               $state=$stateName[$n];   
               $scode=$stateCode[$n];
               echo "<option value='$scode'";
               if ($scode== "BRU")
                  echo " selected";
			   echo " >$state</option>\n";
             }
             echo "</select></div>";
         }
         else	                                           #133
         {
           if(preg_match("/pass/i",$field))
             $type = "password";
           else
             $type = "text"; 
           echo "<div id='field'>
             <label for='$field'>$value</label>
             <input id='$field' name='$field' type='$type' 
             value='".@$$field."' size='40' maxlength='65' />
             </div>\n";
         }  //end else
       }  // end foreach field	                          #145
?>
       <input type="submit" name="Button" 
          style='margin-left: 45%; margin-bottom: .5em'
          value="S'enregistrer">
      </fieldset>
    </form>
  </div>
</div>
</body></html>
