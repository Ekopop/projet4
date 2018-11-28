Post envoyé

<?php
    $postManager = new PostManager();

    $title = $_POST['title'];
    $content = $_POST['content'];

    var_dump($title);
    var_dump($content);

    $postManager->addPost($title, $content);
?>