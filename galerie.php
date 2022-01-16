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
    <title>Gallery</title>
</head>
<body>

<!--menu-->

<?php
    include('includes/nav.php');
?>


    <div class="container">

<!--titre de la page-->

        <header>
            <h1>Gallery</h1>
        </header>

<div class="titre_page_galerie">
    <h2>Picture Gallery</h2>
</div>

<div class="row">
    <div class="column">
        <img src="galerie/zoro_galerie_1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow">
    </div>
    <div class="column">
        <img src="galerie/zoro_galerie_2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow">
    </div>
    <div class="column">
        <img src="galerie/zoro_galerie_3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow">
    </div>
    <div class="column">
        <img src="galerie/zoro_galerie_4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow">
    </div>
    <div class="column">
        <img src="galerie/zoro_galerie_5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow">
    </div>
    <div class="column">
        <img src="galerie/zoro_galerie_6.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow">
    </div>
    <div class="column">
        <img src="galerie/zoro_galerie_7.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow">
    </div>
    <div class="column">
        <img src="galerie/zoro_galerie_8.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow">
    </div>
</div>


<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">

    <div class="mySlides">
        <img src="galerie/zoro_galerie_1.jpg" >
    </div>

    <div class="mySlides">
        <img src="galerie/zoro_galerie_2.jpg" >
    </div>

    <div class="mySlides">
        <img src="galerie/zoro_galerie_3.jpg" >
    </div>

    <div class="mySlides">
        <img src="galerie/zoro_galerie_4.jpg" >
    </div>

    <div class="mySlides">
        <img src="galerie/zoro_galerie_5.jpg" >
    </div>

    <div class="mySlides">
        <img src="galerie/zoro_galerie_6.jpg" >
    </div>

    <div class="mySlides">
        <img src="galerie/zoro_galerie_7.jpg" >
    </div>

    <div class="mySlides">
        <img src="galerie/zoro_galerie_8.jpg" >
    </div>


    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>


    <div class="caption-container">
        <p id="caption"></p>
    </div>


    <div class="column">
        <img class="apercu" src="galerie/zoro_galerie_1.jpg" onclick="currentSlide(1)" alt="Zoro on Baratie">
    </div>

    <div class="column">
        <img class="apercu" src="galerie/zoro_galerie_2.jpg" onclick="currentSlide(2)" alt="Zoro and Sanji">
    </div>

    <div class="column">
        <img class="apercu" src="galerie/zoro_galerie_3.jpg" onclick="currentSlide(3)" alt="Zoro vs Kaku">
    </div>

    <div class="column">
        <img class="apercu" src="galerie/zoro_galerie_4.jpg" onclick="currentSlide(4)" alt="Zoro vs Kuma">
    </div>

    <div class="column">
        <img class="apercu" src="galerie/zoro_galerie_5.jpg" onclick="currentSlide(5)" alt="Zoro on Punk Hazard">
    </div>

    <div class="column">
        <img class="apercu" src="galerie/zoro_galerie_6.jpg" onclick="currentSlide(6)" alt="Zoro with Enma">
    </div>

    <div class="column">
        <img class="apercu" src="galerie/zoro_galerie_7.jpg" onclick="currentSlide(7)" alt="Fanart">
    </div>

    <div class="column">
        <img class="apercu" src="galerie/zoro_galerie_8.jpg" onclick="currentSlide(8)" alt="Fanart">
    </div>
    </div>
</div>

<div class="titre_page_galerie">
    <h2 id="comments">Comments section</h2>
</div>

<section>
    <div class="form_commentaire">
        <h3>Leave a comment</h3>
            <form class="commentaires" method="post">
                <input type="text" name="pseudo" class="text-box" placeholder="Username">
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <input type="submit" name="submit" class="bouton_envoie_commentaire" value="Send">
            </form>
    </div>
</section>

<div class="titre_page_galerie">
    <h2 id="comments">Comments</h2>
</div>

<?php
        // connexion à la base de données
        include('includes/connect.php');
        
        if ($_POST){
                // je met un antislash devant les ' pour bloquer les hackeurs voulant écrire ' or 1 = 1
                $_POST['pseudo'] = addslashes($_POST['pseudo']);
                $_POST['message'] = addslashes($_POST['message']);
                $pdo->exec("INSERT INTO commentaire (pseudo, message, date_heure_message) VALUE ('$_POST[pseudo]', '$_POST[message]', NOW())"); 
        } 
        ?>

        <?php
        $ordre = $pdo->prepare("SELECT * FROM commentaire ORDER BY date_heure_message DESC");
        $ordre->execute();
        $comment_list = $ordre->fetchAll(PDO::FETCH_ASSOC);
        ?>

        <?php 
            foreach($comment_list as $comment) {
        ?>
            
            <div class="commentaire_style">
                <div class="commentaire_style_haut">
                    <p id="pseudo"><?php echo $comment['pseudo']; ?></p>
                    <p id="date_heure_envoie_message"><?php echo $comment['date_heure_message']; ?></p>
                </div>
                    <p id="message_commentaire"><?php echo $comment['message']; ?></p>
                    <?php
                    if (isset($_SESSION["role"]) && $_SESSION['role'] == 'admin') { ?>
                        <a href="includes/delete.php?id=<?php echo $comment['id_commentaire']; ?>">Delete</a>
                    <?php
                    } else {
                        
                    }
                    ?>
            </div>
        <?php 
        }
        ?>


<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>


    </div>
<!--appel du script javascript-->
    <script src="script/script.js"></script>
    <script src="script/script_galerie.js"></script>
</body>
</html>