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
    <title>Article</title>
</head>
<body>

<!--menu-->

<?php
    include('includes/nav.php');
?>

    <div class="container">

        <div class="titre_entire_article">
        <div class="vide"></div>
            <h2>Swords use by Zoro</h2>
        </div>

        <div class="entire_article_img">
            <img src="images/img_posts/article_zoros_swords.jpg">
        </div>

        <div class="text_entire_article">
            <p>Zoro’s goal is to become the strongest swordsman in the world. 
                Thanks to his style of three-saber combat, Zoro has defeated many powerful enemies to date and acquired beautiful swords during his journey, some of which are known to have legendary status in the world of One Piece. 
                Zoro’s swords are so powerful and precious that they even have special names.
            </p>
            <p>In Wano zoro use Enma, wich was one of the two swords of Oden.
                He also use Wado Ichimonji wich is the first sword that Zoro ever had.
                The last one he use is Sandai Kitetsu, a sword he found at Logue Town after he felt it sinister energy.
            </p>
        </div>




<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>


    </div>
    <script src="script/script.js"></script>
</body>
</html>