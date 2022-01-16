<?php
session_start();

if (isset($_SESSION["role"]) && $_SESSION['role'] == 'admin') {
    
} else {
    header('Location: index.php');
}

include('includes/connect.php');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Dashboard</title>
</head>
<body>

<!--menu-->

<?php
    include('includes/nav.php');
?>

    <div class="container">
        <div class="bienvenue">
        <div class="vide"></div>
            <h1>Welcome <?php echo $_SESSION['pseudo']; ?>!</h1>
            <p>in your administrator space.</p>
        </div>

        <div class="ligne_noir">
            <h2>Add User</h2>
        </div>

        <div class="ajout_user">
            <form id="form_ajout_user" method="post">
                <div class="input">
                    <input type="text" id="pseudo_login" placeholder="Username" name="pseudo">
                </div>
                <div class="input">
                    <input type="text" id="mail" placeholder="Mail Adress" name="mail">
                </div>
                <div class="input">
                    <input type="text" id="password_login" placeholder="Password" name="password">
                </div>
                <div class="select">
                    <select name="statut" id="select_statut">
                        <option value="editeur">Editor</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="div_bouton" id="div_bouton_sign_up">
                    <input type="submit" value="Add User" class="bouton" id="add_user">
                </div>
            </form>

            <?php
                if ($_POST) {
                    $_POST['pseudo'] = addslashes($_POST['pseudo']);
                    $_POST['mail'] = addslashes($_POST['mail']);
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                    $pdo->exec("INSERT INTO membres (pseudo, mail, password, statut) VALUE ('$_POST[pseudo]', '$_POST[mail]', '$password', '$_POST[statut]')");
                }
            ?>

        </div>

        <div class="ligne_noir">
            <h2>Contact</h2>
        </div>

        <div class="demandes_contact">
            <?php 

                $contact = $pdo->prepare("SELECT * FROM contact ORDER BY id_contact DESC");
                $contact->execute();
                $contact_list = $contact->fetchAll(PDO::FETCH_ASSOC);
                foreach($contact_list as $demandes_contact) {
            ?>
                <div class="list_demandes_contact">
                    <div class="demandes_contact_style">
                        <p id="nom_contact"><?php echo $demandes_contact['prenom'] . ' ' . $demandes_contact['nom']; ?></p>
                        <p id="numero_tel"><?php echo $demandes_contact['num_tel']; ?></p>
                        <p id="mail_contact"><?php echo $demandes_contact['mail']; ?></p>
                        <p id="message_contact"><?php echo $demandes_contact['message']; ?></p>
                    </div>
                </div>
            <?php 
            }
            ?>
    </div>



<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>


    </div>
    <script src="script/script.js"></script>
</body>
</html>