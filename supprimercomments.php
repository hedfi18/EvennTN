<?php
    require 'D:/xampp/htdocs/web1/test/Controller/commentsC.php';

    $commentsC = new commentsC();
    $commentsC->supprimercomments($_GET['id']);
    header('Location:liste_commentaire.php');
?>