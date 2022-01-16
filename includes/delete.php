<?php

include('connect.php');
$id = $_GET['id'];
$pdo->exec("DELETE FROM commentaire WHERE id_commentaire = '$id'");
header('Location:../galerie.php');


?>