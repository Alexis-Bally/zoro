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
    <title>Sign up</title>
</head>

<body id="body_form_page">

<!--menu-->

<?php
    include('includes/nav.php');
?>

<div class="container">

        <header id="header_login_page"></header>

        <div class="formulaire" id="div_form_login">
            
            <h1>Sign Up</h1>
<!--formulaire-->
            <form id="form_login" method="post">
                <div class="input">
                    <input type="text" id="pseudo_login" placeholder="Username" name="pseudo">
                </div>
                <div class="input">
                    <input type="text" id="mail" placeholder="Mail Adress" name="mail">
                </div>
                <div class="input">
                    <input type="text" id="password_login" placeholder="Password" name="password">
                </div>
                <div class="div_bouton" id="div_bouton_sign_up">
                    <input type="submit" value="Sign Up" class="bouton" id="sign_up">
                </div>
            </form>

        </div>

<?php

    include('includes/connect.php');

    if ($_POST) {
        $_POST['pseudo'] = addslashes($_POST['pseudo']);
        $_POST['mail'] = addslashes($_POST['mail']);
        $_POST['password'] = addslashes($_POST['password']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $pdo->exec("INSERT INTO membres (pseudo, mail, password, statut) VALUE ('$_POST[pseudo]', '$_POST[mail]', '$password', 'editeur')");
    }

?>

<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>


    </div>
    <script src="script/script.js"></script>
</body>
</html>