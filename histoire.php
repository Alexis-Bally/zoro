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
    <title>History</title>
</head>

<body>
<!--menu-->

<?php
    include('includes/nav.php');
?>

<div class="container">

<!--titre de la page-->
        <header>
            <h1>History</h1>
        </header>

<!--Bande noire pour son passé-->

        <div class="ligne_noir">
<!--Emblème pirate de zoro-->
            <div class="image_bande_noir">
                <img src="images/embleme_zoro.png">
            </div>
<!--Titre de la partie-->
                <h2>His Past</h2>
<!--Emblème pirate de zoro-->
            <div class="image_bande_noir">
                <img src="images/embleme_zoro.png">
            </div>
        </div>

        <div id="son_passe">

            <div class="image_ligne" id="image_son_passe">
                <img src="images/Zoro_and_Kuina's_Promise.jpg">
            </div>

            <div class="texte_ligne" id="texte_son_passe">
                <p>As a child, Zoro trained at a dojo in Shimotsuki Village.
                    Even at this time, Zoro was strong enough to defeat most adults, but could not defeat Kuina, the daughter of the dojo's master, Koushirou.
                    After their 2000th fight (and Kuina's 2000th victory), Zoro challenged her in private for one more match—with real swords.
                    Although he had improved tremendously since their first match, he still lost and cried with frustration, telling Kuina about his dream of becoming the world's greatest swordsman.
                    Hearing this, Kuina confided in Zoro, telling him that she shared the same dream but knew she could never attain it.
                    Her father had told her that girls could never be true sword masters, and that her fighting potential would decrease as her body matured.
                    Zoro, annoyed by her defeatist attitude in spite of repeatedly winning against him, told her that one day he would beat her because he was more skilled, not because she was a girl.
                    The two made a promise—that either of them had to become the world's best swordsman.
                </p>
            </div>
            
        </div>

<!--Bande noire pour ses amis-->

        <div class="ligne_noir">
<!--Emblème pirate de zoro-->
            <div class="image_bande_noir">
                <img src="images/embleme_zoro.png">
            </div>
<!--Titre de la partie-->
                <h2>His Friends</h2>
<!--Emblème pirate de zoro-->
            <div class="image_bande_noir">
                <img src="images/embleme_zoro.png">
            </div>
        </div>
<!--ligne de sous titre-->
        <div class="ligne_verte">
            <h3>His Crew</h3>
        </div>

        <div class="ligne" id="son_equipage">

            <div class="image_ligne" id="image_son_equipage">
                <img src="images/strawhats_crew.jpg">
            </div>

            <div class="texte_ligne" id="texte_son_equipage">
                <p>
                    The Straw Hat Pirates (麦 わ ら の 一味, Mugiwara no Ichimi) are a pirate crew from East Blue.
                    The "Straw Hats" are named after Luffy's Straw Hat given to him by Akagami no Shanks, and are first called "Straw Hat Pirates" by Smoker in Alabasta.
                    The crew sailed the Vogue Merry, their first pirate crew ship, to the Arc Water Seven.
                    After the Arc Enies Lobby, they received a new ship, the Thousand Sunny.
                    The crew is currently made up of 10 members with a total bounty of 3,161,000,100 Berry.
                </p>
            </div>
            
        </div>

        <div id="drapeaux">

            <section id="images_haut">
<!--images de la ligne du haut-->
                <img src="images/flag_luffy.png">
                <img src="images/flag_zoro.png">
                <img src="images/flag_nami.png">
                <img src="images/flag_sanji.png">
                <img src="images/flag_ussop.png">

            </section>

            <section id="images_bas">
<!--images de la ligne du bas-->
                <img src="images/flag_chopper.png">
                <img src="images/flag_franky.png">
                <img src="images/flag_robin.png">
                <img src="images/flag_brook.png">

            </section>

        </div>
<!--ligne de sous titre-->
        <div class="ligne_verte">
            <h3>Tashigi</h3>
        </div>

        <div class="ligne" id="tashigi">

            <div class="image_ligne" id="image_tashigi">
                <img src="images/Tashigi_Facing_Zoro.jpg">
            </div>

            <div class="texte_ligne" id="texte_tashigi">
                <p>
                    Zoro has a unique relationship with Tashigi of the Marines.
                    Tashigi and Zoro met in Loguetown, where she helped him search for a new katana.
                    Zoro defeated her once when she attacked him after finding out that he was a pirate, but refused to fight her again in later confrontations due to her uncanny resemblance to his childhood friend, Kuina.
                </p>
            </div>
            
        </div>
<!--ligne de sous titre-->
        <div class="ligne_verte">
            <h3>Bartolomeo</h3>
        </div>

        <div class="ligne" id="bartolomeo">

            <div class="image_ligne" id="image_bartolomeo">
                <img src="images/Zoro_and_Bartolomeo.jpg">
            </div>

            <div class="texte_ligne" id="texte_bartolomeo">
                <p>
                    Zoro first met the rookie at Dressrosa and was put off by the latter's excitement to meet him.
                    However, he did appreciate him relaying his message to Luffy for an autograph.
                    They met again when Bartolomeo was flying in the air with Robin and Rebecca, while Zoro was battling Pica and the rookie requested for the autograph again.
                    Zoro protected the trio from the Donquixote executive's stone statue, much to Bartolomeo's amazement.
                    Bartolomeo was also later excited to see Zoro destroy the statue and defeat Pica, foaming at the mouth when seeing the display.
                    Bartolomeo even gave the Straw Hats a ride to Zou, while it is shown that Zoro gave him the signature that he requested as Bartolomeo framed it.
                </p>
            </div>
            
        </div>

        <div class="ligne_noir">
            <!--Emblème pirate de zoro-->
                        <div class="image_bande_noir">
                            <img src="images/embleme_zoro.png">
                        </div>
            <!--Titre de la partie-->
                            <h2>His Ennemies</h2>
            <!--Emblème pirate de zoro-->
                        <div class="image_bande_noir">
                            <img src="images/embleme_zoro.png">
                        </div>
                    </div>
<!--ligne de sous titre-->
        <div class="ligne_verte">
            <h3>Ryuma</h3>
        </div>

        <div class="ligne" id="ryuma">

            <div class="image_ligne" id="image_ryuma">
                <img src="images/Zoro_and_Ryuma.jpg">
            </div>

            <div class="texte_ligne" id="texte_ryuma">
                <p>
                    Zoro met Ryuma on Thriller Bark after he tried to kill Brook.
                    Zoro challenged the zombie samurai and grew to like his sword, the Meito Shusui, and challenged him to acquire it.
                    The two fought fiercely and eventually, Zoro defeated Ryuma.
                    Set aflame, Ryuma accepted defeat and decided to give Zoro his sword, heavily believing that the soul of the sword would be most satisfied to serve under the man who defeated its preceding owner.
                </p>
            </div>
            
        </div>
<!--ligne de sous titre-->
        <div class="ligne_verte">
            <h3>Pica</h3>
        </div>

        <div class="ligne" id="pica">

            <div class="image_ligne" id="image_pica">
                <img src="images/Zoro_against_Pica.jpg">
            </div>

            <div class="texte_ligne" id="texte_pica">
                <p>
                    Zoro first confronted Pica inside the Dressrosa Royal Palace and battled him to allow Luffy and Viola to proceed further.
                    However, Pica abandoned their battle to return to Doflamingo.
                    However, Pica revealed that his true target was Riku Doldo III, and headed to the King's Plateau to kill the former king.
                    Zoro chased Pica down and cut apart his stone covering, intent on finding Pica's true body.
                    Pica eventually emerged and prepared to kill Zoro using his Haki, but Zoro's Haki was stronger, and Pica was cut down.
                    Zoro told his fallen opponent to never mess with his friends again.
                </p>
            </div>
            
        </div>

<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>

        
    </div>
    <script src="script/script.js"></script>
</body>
</html>