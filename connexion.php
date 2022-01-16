<?php
session_start();


    include('includes/connect.php');

    if ($_POST) {
        $pseudo = $pdo->query('SELECT * FROM membres WHERE pseudo = "' . $_POST['pseudo'] . '" ');
        $login = $pseudo->fetch();
        if($login != false) {
            if (password_verify($_POST['password'], $login['password'])) {
                $_SESSION['pseudo'] = $login['pseudo'];
                $_SESSION['role'] = $login['statut'];
                header('Location: index.php');
            } else {
                $erreur_mdp_login = 'Mot de passe invalide';
            }
        } else {
            $erreur_pseudo_login = 'identifiant invalide';
        }
    }

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
    <title>Login</title>
</head>

<body id="body_form_page">

<!--menu-->

<?php
    include('includes/nav.php');
?>

<div class="container">

        <header id="header_login_page"></header>

        <div class="formulaire" id="div_form_login">

                <h1>Login</h1>
<!--formulaire-->
            <form id="form_login" method="post">
                <div class="input">
                    <input type="text" id="pseudo_login" placeholder="Username" name="pseudo">
                </div>
                <?php
                    if (isset($erreur_pseudo_login)) {
                        echo $erreur_pseudo_login;
                    }
                ?>
                <div class="input">
                    <input type="text" id="password_login" placeholder="Password" name="password">
                </div>
                <?php
                    if (isset($erreur_mdp_login)) {
                        echo $erreur_mdp_login;
                    }
                ?>
                <div class="boutons">
                <div class="div_bouton">
                    <input type="submit" value="Login" class="bouton">
                </div>
                <div class="div_bouton">
                    <a href="inscription.php" class="bouton" id="signup">Sign Up</a>
                </div>
                </div>
                <div class="div_bouton" id="bouton_deco">
                    <a href="deconnexion.php" class="bouton" id="deconnexion">Disconnect</a>
                </div>
            </form>
            
        </div>

<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>


    </div>
    <script src="script/script.js"></script>
</body>
</html>