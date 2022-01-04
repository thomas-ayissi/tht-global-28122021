


<body id="global">
<div class="container">



    <!-- inclusion de l'entête du site -->
    <?php include_once "header.php"; ?>
    <br>
    <br>
    <!-- inclusion de du titre du body du site -->
    <h1><?php include_once "titre_body.php"; ?></h1>


    <?php
    /* Program: Login_reg.php
    * Desc:    Main application script for the User Login
    *          application. It provides two options: (1) login
    *          using an existing User Name and (2) register
    *          a new user name. User Names and passwords are
    *          stored in a MySQL database.
    */
    session_start();	                                          #9
    switch (@$_POST['Button'])	                               #10
    {
    case "Login":	                                          #12
    include("dbstuff.inc");	                              #13
    $cxn = mysqli_connect($host,$user,$passwd,$dbname)
    or die("Query died: connect");              	#15
    $sql = "SELECT user_name FROM Customer
    WHERE user_name='$_POST[fusername]'";
    $result = mysqli_query($cxn,$sql)
    or die("Query died: fuser_name");
    $num = mysqli_num_rows($result);                     	#20
    if($num > 0)                                         	#21
    {
    $sql = "SELECT user_name FROM Customer
    WHERE user_name='$_POST[fusername]'
    AND password=md5('$_POST[fpassword]')";
    $result2 = mysqli_query($cxn,$sql)
    or die("Query died: fpassword");	      #27
    $num2 = mysqli_num_rows($result2);                 	#28
    if($num2 > 0)  //password matches	                  #29
    {
    $_SESSION['auth']="yes";                         	#31
    $_SESSION['logname'] = $_POST['fusername'];      	#32
    header("Location: SecretPage.php");              	#33
    }
    else  // password does not match                   	#35
    {
    $message_1="le login, '$_POST[fusername]'
    existe, mais vous n avez pas entre le bon mot de passe ! Essayez encore.";
    $fusername = strip_tags(trim($_POST[fusername]));
    include("form_login_reg.inc");
    }	                                                  #42
    }  // end if $num > 0                                	#43
    elseif($num == 0)  // login name not found           	#44
    {
    $message_1 = "Le login que vous avez saisi n'existe pas ! Essayez encore.";
    include("form_login_reg.inc");
    }
    break;                                                 	#50

    case "Register":                                       	#52
    /* Check for blanks */
    foreach($_POST as $field => $value)                  	#54
    {
    if ($field != "fax")                               	#56
    {
    if ($value == "")
    {
    $blanks[] = $field;
    }
    else
    {
    $good_data[$field] = strip_tags(trim($value));
    }
    }
    } // end foreach POST                                	#67
    if(isset($blanks))                                   	#68
    {
    $message_2 = "Les champs précédents sont vides. Merci de saisir des informations:  ";
    foreach($blanks as $value)
    {
    $message_2 .="$value, ";
    }
    extract($good_data);                               	#76
    include("form_login_reg.inc");
    exit();	                                            #78
    }  // end if blanks found	                            #79
    /* validate data */
    foreach($_POST as $field => $value)                  	#81
    {
    if(!empty($value))	                                 #83
    {
    if(preg_match("/name/i",$field) and
    !preg_match("/user/i",$field) and
    !preg_match("/log/i",$field))
    {
    if (!preg_match("/^[A-Za-z' -]{1,50}$/",$value))
    {
    $errors[] = "$value ne constitue pas un nom valide. ";
    }
    }
    if(preg_match("/street/i",$field) or
    preg_match("/addr/i",$field) or
    preg_match("/city/i",$field))
    {
    if(!preg_match("/^[A-Za-z0-9.,' -]{1,50}$/",
    $value))
    {
    $errors[] = "$value ne constitue pas une adresse valide

    or city. ";
    }
    }
    if(preg_match("/state/i",$field))
    {
    if(!preg_match("/^[A-Z][A-Z]$/",$value))
    {
    $errors[] = "$value ne constitue pas une région valide
    code. ";
    }
    }
    if(preg_match("/email/i",$field))
    {
    if(!preg_match("/^.+@.+\\..+$/",$value))
    {
    $errors[] = "$value ceci n'est pas une adresse valide. ";
    }
    }
    if(preg_match("/zip/i",$field))
    {
    if(!preg_match("/^[0-9]{5,5}(\-[0-9]{4,4})?$/",
    $value))
    {
    $errors[] = "$value ne constitue pas un code postal. ";
    }
    }
    if(preg_match("/phone/i",$field) or
    preg_match("/fax/i",$field))
    {
    if(!preg_match("/^[0-9)(xX -]{7,20}$/",$value))
    {
    $errors[] = "$value ne constitue pas un numéro de téléphone valide
    number. ";
    }
    }
    } // end if not empty	                             #138
    } // end foreach POST
    foreach($_POST as $field => $value)	                 #140
    {
    $$field = strip_tags(trim($value));
    }
    if(@is_array($errors))	                              #144
    {
    $message_2 = "";
    foreach($errors as $value)
    {
    $message_2 .= $value." Essayez encore<br />";
    }
    include("form_login_reg.inc");
    exit();
    } // end if errors are found                        	#153

    /* check to see if user name already exists */
    include("dbstuff.inc");	                             #156
    $cxn = mysqli_connect($host,$user,$passwd,$dbname)
    or die("Couldn't connect to server");
    $sql = "SELECT user_name FROM Customer
    WHERE user_name='$user_name'";          	#160
    $result = mysqli_query($cxn,$sql)
    or die("Query died: user_name.");
    $num = mysqli_num_rows($result);                    	#163
    if($num > 0)                                        	#164
    {
    $message_2 = "$user_name deja pris, choisssez un autre nom d'utilisateur.";
    include("form_login_reg.inc");
    exit();
    } // end if user name already exists
    else                                                	#171
    {
    $today = date("Y-m-d");                           	#173
    $sql = "INSERT INTO Customer (user_name,create_date,
    password,first_name,last_name,street,city,zip,phone,fax,email) VALUES
    ('$user_name','$today',md5('$password'),
    '$first_name', '$last_name','$street','$city','$zip','$phone','$fax','$email')";
    mysqli_query($cxn,$sql);                          	#180
    $_SESSION['auth']="yes";                          	#181
    $_SESSION['logname'] = $user_name;                	#182
    /* send email to new Customer */
    $emess = "Vous êtes parfaitement enregistre. ";
    $emess .= "Votre nouveau login et mot de passe sont : ";
    $emess .= "\n\n\t$user_name\n\t";
    $emess .= "$password\n\n";
    $emess .= "Merci pour votre interet.\n\n";
    $emess .= "Si vous avez des questions ou des problemes,";
    $emess .= " email service@ourstore.com";         	#190
    $subj = "Votre inscription en tant qu utilisatrice ou utilisateur";        	#191
    #$mailsend=mail("$email","$subj","$emess");       	#192
    header("Location: SecretPage.php");              	#193
    } // end else no errors found
    break;                                               	#195

    default:                                             	#197
    include("form_login_reg.inc");
    }  // end switch
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


</body>
</html>
