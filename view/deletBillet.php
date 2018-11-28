Post supprimé

<?php
    $postManager = new PostManager();

    $id = intval($_GET['id']);

    var_dump($id);

    $postManager->deletPost($id);
?>