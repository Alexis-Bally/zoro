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
    <title>Home</title>
</head>
<body>

<!--menu-->

<?php
    include('includes/nav.php');
?>

    <div class="container">

<!--titre de la page-->
        <header>
            <h1>Home</h1>
        </header>

        <div class="ligne" id="presentation_manga">
            
            <div id="image_presentation_manga">
                <img src="images/One_piece_volume_1.jpg">
            </div>

            <div id="texte_presentation_manga">
                <!--titre du texte-->
                <h2>The Manga</h2>
                <!--paragraphe du texte-->
                <p>
                    One Piece is a Japanese manga series written and illustrated by Eiichiro Oda.
                    It has been serialized in Shueisha's Weekly Shōnen Jump magazine since July 1997, with its individual chapters compiled into 98 tankōbon volumes as of February 2021. 
                    The story follows the adventures of Monkey D. Luffy, a boy whose body gained the properties of rubber after unintentionally eating a Devil Fruit. 
                    With his crew of pirates, named the Straw Hat Pirates, Luffy explores the Grand Line in search of the world's ultimate treasure known as "One Piece" in order to become the next King of the Pirates.
                </p>
            </div>
        </div>

        <div class="ligne" id="le_personnage">
            
            <div id="image_le_personnage">
                <!--image qui va changer toutes les deux secondes-->
                <img src="images/zoro_1.png" id="zoro_avance">
            </div>

            <div id="texte_le_personnage">
                <h3>The Character</h3>
                <p>
                    Roronoa Zoro, also call "Pirate hunter Zoro", is a character from the manga One Piece. 
                    He usually maintains a very serious and distanced personality, but often loses his temper in a goofy and exaggerated comical style.
                </p>
                <br>
                <br>
                <!--lien emmenant vers la page histoire-->
                <a id="history_link" href="histoire.php">Click here to see the history of Zoro</a>
            </div>

        </div>

        <div id="titre_timeline">
        <h2>Timeline</h2>
        </div>

        <div class="timeline">
            <div class="ligne_vertical"></div>
            <div class="Block Left">
                <section>
                    <div class="content">
                        <span class="chapitre">Chapter 3 - 7</span>
                        <span class="arc">Romance Dawn</span>
                    </div>
                    <p class="description">Luffy leaves his village to build a crew and find the One Piece. 
                        Unable to navigate alone, he locks himself in a barrel and is rescued by the crew of Lady Alvida, where he meets Koby, a young moss who dreams of becoming a great soldier of the Navy. 
                        They then meet Roronoa Zoro, a terrible Bounty Hunter who is held by the Marines. 
                        After a few days, Zoro agrees to join the crew on condition that Luffy succeeds in finding his swords which are held by Captain Morgan, the chief of the Marines of the island. 
                        After a fight against Morgan, Luffy manages to take back the three swords and leaves with Zoro by letting Koby realize his dream.
                    </p>
                    <div class="LiensArc">
                        <a href="https://onepiece.fandom.com/fr/wiki/Arc_Romance_Dawn" class="More" target="_blank">See all the arc</a>
                    </div>
                </section>
            </div>
            <div class="Block Right">
                <section>
                    <div class="content">
                        <span class="chapitre">Chapters 46 - 68</span>
                        <span class="arc">Baratie</span>
                    </div>
                    <p class="description">The Straw Hat Crew meets Johnny and Yosaku, who lead them to the restaurant ship, the Baratie, a sort of "floating oasis", in the middle of the ocean. 
                        That’s where they meet Sanji, a cook.
                        However, a terrifying pirate named Don Krieg set his sights on the restaurant ship he plans to appropriate to replace his devastated ship. 
                        The restaurant ship was immediately stormed. 
                        Mihawk, an exceptional swordsman, arrived to finish Don Krieg's Pirate Armada, but Zoro challenged him to a duel in order to achieve his dream.
                        Zoro was easily defeated by Mihawk.
                    </p>
                    <div class="LiensArc">
                        <a href="https://onepiece.fandom.com/fr/wiki/Arc_Baratie" class="More" target="_blank">See all the arc</a>
                    </div>
                </section>
            </div>
            <div class="Block Left">
                <section>
                    <div class="content">
                        <span class="chapitre">Chapters 155 - 217</span>
                        <span class="arc">Alabasta</span>
                    </div>
                    <p class="description">
                        The Straw Hat Crew and Nefertari Vivi finally arrived in the desert kingdom of Alabasta, with the intention of dismantling Baroque Works and destroying Crocodile’s ambitions. 
                        From the first city, Luffy comes across Colonel Smoker who had anticipated his movements, but easily gets out of this bad step thanks to his brother, Portgas D. Ace, whom he also meets by chance. 
                        The capital of the kingdom, where the rebel army, the agents of Baroque Works and the crew of Luffy converge is the place where a bloody and epic battle between the rebels and the regular army on the one hand, Baroque Works and our heroes on the other, which leads to the defeat of Crocodile and his plans. 
                        Luffy also won a new crew member, Nico Robin, who was an ally of the privateer under the name of Miss All Sunday, as well as a bonus of one hundred million berrys.
                    </p>
                    <div class="LiensArc">
                        <a href="https://onepiece.fandom.com/fr/wiki/Arc_Alabasta" class="More" target="_blank">See all the arc</a>
                    </div>
                </section>
            </div>
            <div class="Block Right">
                <section>
                    <div class="content">
                        <span class="chapitre">Chapters 442 - 489</span>
                        <span class="arc">Thriller Bark</span>
                    </div>
                    <p class="description">The Straw Hat Crew disembarks in the Florian Triangle, a dangerous maritime area covered with mist. 
                        After meeting Brook, a living skeleton, our heroes are trapped on Thriller Bark, the huge boat of Captain Corsair Gecko Moria in the gothic atmosphere. 
                        The crew meets very strange creatures like zombies, a guard, etc... 
                        However, he discovers what lies behind these supernatural phenomena: Moria and Hogback, a scientist, have the ability to bring bodies back to life by stealing people’s shadows. 
                        After facing many zombies, The Straw Hat Crew finally defeated Moria and recovered all the shadows he had stolen. 
                        At the end of the arc, Brook joined Luffy’s crew to play the role of musician.
                    </p>
                    <div class="LiensArc">
                        <a href="https://onepiece.fandom.com/fr/wiki/Arc_Thriller_Bark" class="More" target="_blank">See all the arc</a>
                    </div>
                </section>
            </div>
            <div class="Block Left">
                <section>
                    <div class="content">
                        <span class="chapitre">Chapters 597 - 599</span>
                        <span class="arc">Time skip</span>
                    </div>
                    <p class="description">After sending a message to his crew saying that they will be training during 2 years, Luffy goes to one of the most hostile islands of Calm Belt with Rayleigh as a mentor to learn to master Haki.
                        During these two years, Zoro receives training from Mihawk "Hawk Eye". 
                        Usopp receives training from Heracles. 
                        Nami studies New World meteorology on a Celestial Island, as well as new weather-related technologies. 
                        Sanji confronts the Okamas masters in order to learn new recipes in Newcomer Land. 
                        Chopper studies new medicines. 
                        Robin makes contact with Monkey D. Dragon and the Revolutionaries. 
                        Franky studies the technologies of Doctor Vegapunk on his native island. 
                        Brook became a global music star.
                    </p>
                    <div class="LiensArc">
                        <a href="https://onepiece.fandom.com/fr/wiki/Arc_Post-Marine_Ford" class="More" target="_blank">See all the arc</a>
                    </div>
                </section>
            </div>
            <div class="Block Right">
                <section>
                    <div class="content">
                        <span class="chapitre">Chapters 700 - 801</span>
                        <span class="arc">Dressrosa</span>
                    </div>
                    <p class="description">
                        The crew of Straw Hat, Trafalgar Law, Kinémon and Momonosuké, having formed an alliance, traveled to Dressrosa to implement their plans. 
                        Dressrosa is the second island that the Straw Hat crew discovers in the New World, and is governed by Grand Corsair Don Quijote Doflamingo. 
                        After some of the crew left Dressrosa for Zo, the other part eventually discovered the secrets of this island and they decided to fight against Doflamingo and his team with the help of powerful fighters met in the Corrida Colosseum as well as dwarves of the Tontatta tribe. 
                        After long battles, Luffy won Doflamingo and returned the throne to the former royal family.
                        The fighters who helped Luffy decide to form the great fleet of the straw hat. 
                        During this arc, we also find Luffy’s other older brother, Sabo (who we thought was dead) and who is in fact the second in command of the Revolutionary Army. 
                        He succeeds in seizing the Pyro Fruit (fruit of the demon of Ace) and promises to always come to Luffy’s aid when he needs it.
                    </p>
                    <div class="LiensArc">
                        <a href="https://onepiece.fandom.com/fr/wiki/Arc_Dressrosa" class="More" target="_blank">See all the arc</a>
                    </div>
                </section>
            </div>
            <div class="Block Left">
                <section>
                    <div class="content">
                        <span class="chapitre">Chapters 909 - ???</span>
                        <span class="arc">Wano Kuni</span>
                    </div>
                    <p class="description">
                        The alliance formed by Luffy, Kidd, Law, samurais and minks starts its plan to free Wano Kuni from Kaido control.
                    </p>
                    <div class="LiensArc">
                        <a href="https://onepiece.fandom.com/fr/wiki/Arc_Pays_des_Wa" class="More" target="_blank">See all the arc</a>
                    </div>
                </section>
            </div>
        </div>
    

<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>

    </div>

    
<!--appel du script javascript-->
    <script src="script/script.js"></script>
    <script src="script/script_home.js"></script>
</body>
</html>