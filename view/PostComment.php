Commentaire envoyé

<?php
    require('../db.php');
    require('CommentManager.php');
    $commentManager = new CommentManager();

    $id_post = $_POST['idPost'];
    $autor = $_POST['userPseudo'];
    $contentComment = $_POST['contentComment'];

    var_dump($autor);

    $commentManager->addComment($id_post, $autor, $contentComment);
?>