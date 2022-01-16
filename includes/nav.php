<nav>
    <div id="liens">
        <ul class="navbar">
            <!--liens vers les autres pages de mon site-->
            <li><a href="index.php">Home</a></li>
            <li><a href="histoire.php">History</a></li>
            <li><a href="galerie.php">Gallery</a></li>
            <li><a href="blog.php">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
            <?php
            if (isset($_SESSION["role"]) == null) { ?>
                <li><a href="connexion.php" id="special_link">Login</a></li>
            <?php
            } else { ?>
                <li><a href="connexion.php" id="special_link">Change account</a></li>
            <?php
            }
            ?>
            <?php
            if (isset($_SESSION["role"]) && $_SESSION['role'] == 'admin') { ?>
                <li><a href="dashboard.php" id="special_link">Dashboard</a></li>
            <?php
            } else {
                
            }
            ?>
        </ul>
    </div>
    <div id="div_bouton_dark">
        <button id="bouton_dark" onclick="DarkMode()">Dark / Light Mode</button> 
    </div>
    <!--icone pour le menu burger-->
    <div class="icone">
        <div class="ligne1"></div>
        <div class="ligne2"></div>
        <div class="ligne3"></div>
    </div>
</nav>

<style>
nav {
    display: flex;
    /*bloque sa position par rapport a la page*/
    position: fixed;
    width: 100%;
    /*fait passer la barre de navigation au premier plan*/
    z-index: 5;
    justify-content: space-around;
    align-items: center;
    min-height: 8vh;
    background-color: #4c8567;
    flex-direction: row-reverse;
}

#liens{
    width: 65%;
}

nav ul {
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    width: 100%;
}

nav ul li {
    display: flex;
    text-align: center;
    align-items: center;
}

#special_link {
    border-radius: 40px;
    background-color: #525252;
    padding: 0 2vw;
}

#special_link:hover {
    background-color: #3d3d3d;
}

nav ul li a {
    display: block;
    color: #f1f1f1;
    text-decoration: none;
    font-size: 1.7em;
    opacity: 0.6;
}

nav ul li a:hover{
    color: #fffffb;
    opacity: 1;
    transition: all 0.3s;
    /*souligne le texte*/
    text-decoration: underline;
}

#div_bouton_dark{
    display: flex;
    width: 20%;
}

#bouton_dark{
    display: block;
    z-index: 2;
    background-color: #1a1a1a;
    color: #f1f1f1;
    cursor: pointer;
    padding: 1vh;
    border-radius: 80px;
    font-size: 1em;
    border: none;
}

.icone{
    display: none;
    /*change la souris et pointeur indique que l'on peut cliquer*/
    cursor: pointer;
}

.icone div{
    width: 30px;
    height: 3px;
    background-color: #fffffb;
    /*arrondi les bords*/
    border-radius: 4px;
    margin: 5px;
}

@media screen and (max-width: 1100px) {

    body{
        /*cache ce qui sort de l'écran sur l'axe x*/
        overflow-x: hidden;
    }

    nav {
        flex-direction: row;
    }

    #liens {
        width: auto;
    }

    .icone {
        display: block;
        margin-right: 3vw;
    }

    .navbar {
        display: flex;
        flex-direction: column;
        position: absolute;
        right: 0;
        top: 8vh;
        height: 92vh;
        align-items: center;
        background-color: #44755b;
        width: 50%;
        /*bouge la navbar sur l'axe x*/
        transform: translateX(100%);
        transition: transform 0.5s ease-in;
        border-bottom-left-radius: 20px;
    }

    .navbar li {
        opacity: 0;
    }

    #div_bouton_dark{
        width: 100%;
    }

    #bouton_dark{
        margin-left: 3vw;
        font-size: 0.7em;
    }

}

.active{
    transform: translateX(0);
}

@keyframes navbarfade {
    from{
        opacity: 0;
        transform: translateX(50px);
    }

    to{
        opacity: 1;
        transform: translateX(0);
    }
}
</style>