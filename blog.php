<?php
session_start();

include('includes/connect.php');

if (isset($_POST['addpost'])) {

    $dataArticle = [
        'img_link' => 'images/img_posts/' . $_FILES['image']['name'],
        'img_file' => $_FILES['image']['tmp_name']
    ];

    $data = [
        'title' => htmlspecialchars($_POST['title']),
        'content' => $_POST['content'],
        'img_link' => $dataArticle['img_link']
    ];

    move_uploaded_file($dataArticle['img_file'], $dataArticle['img_link']);

    $addArticle = $pdo->prepare("INSERT INTO posts (title,content, link) VALUES (:title, :content, :img_link)");
    $addArticle->execute($data);

}

$getDataArticle = $pdo->prepare("SELECT * FROM posts");
$getDataArticle->execute();

$articles = $getDataArticle->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <title>Blog</title>
</head>
<body>

<!--menu-->

<?php
    include('includes/nav.php');
?>

<div class="container">
        <header>
            <h1>Blog</h1>
        </header>

    <div id="titre_all_articles">
        <h2>Articles</h2>
    </div>

    <div class="formulaire" id="addposts">
    <h1>Add an Article</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="title">Title of the Article</label>
                <input type="text" name="title" id="title">
            </div>
            <div>
                <label for="photo">Choose a Image</label>
                <input type="file" accept="image/png, image/jpeg" name="image">
            </div>
            <div>
                <label for="contenu">Content of the Article</label>
                <textarea name="content" id="contenu" cols="40" rows="5"></textarea>
            </div>
            <button type="submit" name="addpost" class="bouton">Publish the Article</button>
        </form>
    </div>

    <div class="all_articles">
        <div class="article">
            <h2>Swords use by Zoro</h2>
            <div class="content_article">
                <div class="article_img">
                    <img src="images/img_posts/article_zoros_swords.jpg">
                </div>
                <div class="text_article">
                    <p>Zoro’s goal is to become the strongest swordsman in the world. 
                        Thanks to his style of three-saber combat, Zoro has defeated many powerful enemies to date and acquired beautiful swords during his journey, some of which are known to have legendary status in the world of One Piece. 
                        Zoro’s swords are so powerful and precious that they even have special names.
                    </p>
                    <a class="article_link" href="article_1.php">See the entire article</a>
                    <?php
                        if (isset($_SESSION["role"]) && $_SESSION['role'] == 'admin') { ?>
                        <a href="includes/delete_article.php?id=<?php echo $article['id_post']; ?>">Delete</a>
                        <?php
                        } else {
                        
                        }
                        ?>
                </div>
            </div>
        </div>

        <div class="article">
            <h2>Most epic moment of Zoro</h2>
            <div class="content_article">
                <div class="article_img">
                    <img src="images/img_posts/article_zoros_sacrifice.jpg">
                </div>
                <div class="text_article">
                    <p>Kuma ravaged Thriller Bark with his attack. 
                        While he checked that everyone was K.O, Zoro attacked him while Kuma was going to take Luffy with him. 
                        Zoro asked if he could take his life instead of that of his captain. 
                        Kuma congratulated him for his courage but doubted that he would be able to bear the pain.
                    </p>
                    <a class="article_link" href="article_2.php">See the entire article</a>
                    <?php
                        if (isset($_SESSION["role"]) && $_SESSION['role'] == 'admin') { ?>
                        <a href="includes/delete_article.php?id=<?php echo $article['id_post']; ?>">Delete</a>
                        <?php
                        } else {
                        
                        }
                        ?>
                </div>
            </div>
        </div>

        <?php foreach($articles as $article) { ?>
            <div class="article">
            <h2><?php echo $article['title']; ?></h2>
                <div class="content_article">
                    <div class="article_image">
                        <img src="<?php echo $article['link']; ?>" alt="<?php echo $article['title']; ?>">
                    </div>
                    <div class="text_article">
                        <p><?php echo $article['content']; ?></p>

                        <?php
                        if (isset($_SESSION["role"]) && $_SESSION['role'] == 'admin') { ?>
                        <a href="includes/delete_article.php?id=<?php echo $article['id_post']; ?>">Delete</a>
                        <?php
                        } else {
                        
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

<?php
    include('includes/top_bouton.php');
    include('includes/footer.php');
?>


</div>
    <script src="script/script.js"></script>
</body>
</html>