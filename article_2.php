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
            <h2>Most epic moment of Zoro</h2>
        </div>

        <div class="entire_article_img">
            <img src="images/img_posts/article_zoros_sacrifice.jpg">
        </div>

        <div class="text_entire_article">
            <p>Kuma ravaged Thriller Bark with his attack. 
                While he checked that everyone was K.O, Zoro attacked him while Kuma was going to take Luffy with him. 
                Zoro asked if he could take his life instead of that of his captain. 
                Kuma congratulated him for his courage but doubted that he would be able to bear the pain.
            </p>
            <p>Kuma created a small bubble of suffering belonging to Luffy and sent it to Zoro. 
                Zoro collapsed to the ground. 
                However, the swordsman rose up and was still ready to sacrifice himself. 
                Roronoa Zoro entered the bubble of all Luffy’s suffering. 
                Later, the crew members were seen waking up and Luffy jumping around, noticing that he was no longer injured.
                Sanji wondered what was going on. 
                He went and found Zoro, in the middle of a destroyed place, standing, arms crossed and bloody. 
                There was enormous amount of blood on the ground. 
                He asked what had happened, to which Zoro replied : "Nothing. Nothing at all".
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