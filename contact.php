<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--police utilisée-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!--appel des fichiers css-->
    <link rel="stylesheet" href="styles/style.css">
    <title>Contact</title>
</head>

<body id="body_form_page">

<!--menu-->

<?php
    include('includes/nav.php');
?>

<div class="container">

<!--titre de la page-->

        <header id="header_form_page">
            <h1>Contact</h1>
        </header>

        <div class="formulaire">
            
            <h1>Contact Us</h1>
            <div id="message_erreur"></div>
<!--formulaire-->
            <form id="form"  method="post" onsubmit="return validation()">
                <div class="input">
                    <input type="text" id="prenom" placeholder="First Name" name="prenom">
                </div>
                <div class="valid" id="valid_prenom">
                    <p>First name is valid</p>
                </div>
                <div class="input">
                    <input type="text" id="nom" placeholder="Last Name" name="nom">
                </div>
                <div class="valid" id="valid_nom">
                    <p>Last name is valid</p>
                </div>
                <div class="input">
                    <input type="text" id="phone" placeholder="Phone" name="num_tel">
                </div>
                <div class="input">
                    <input type="text" id="mail" placeholder="Email" name="mail">
                </div>
                <div class="valid" id="valid_mail">
                    <p>Email is valid</p>
                </div>
                <div class="input" id="message_contact">
                    <textarea id="message" placeholder="Message" name="message"></textarea>
                </div>
                <div class="div_bouton" id="submit_contact">
                    <input type="submit" value="Submit" class="bouton">
                </div>
            </form>

        </div>

<?php

include('includes/connect.php');

        if ($_POST){
                $_POST['prenom'] = addslashes($_POST['prenom']);
                $_POST['nom'] = addslashes($_POST['nom']);
                $_POST['num_tel'] = addslashes($_POST['num_tel']);
                $_POST['mail'] = addslashes($_POST['mail']);
                $_POST['message'] = addslashes($_POST['message']);
                $pdo->exec("INSERT INTO contact (prenom, nom, num_tel, mail, message) VALUE ('$_POST[prenom]', '$_POST[nom]', '$_POST[num_tel]', '$_POST[mail]', '$_POST[message]')");
        } 

?>

<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>


    </div>
    <script src="script/script.js"></script>
    <script src="script/script_contact.js"></script>
</body>
</html>