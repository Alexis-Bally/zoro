<?php

include('connect.php');
$id = $_GET['id'];
$pdo->exec("DELETE FROM posts WHERE id_post = '$id'");
header('Location:../blog.php');


?>