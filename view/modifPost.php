<?php
    $postManager = new PostManager();
    $idPost = $_GET['id'];
    $post = $postManager->getPost($idPost);
    
?>
<div class="row justify-content-md-center rounded">
    <div class="col-11 border" id="epContent">
        <div class="border m-4">
            <div class="d-flex justify-content-between border p-2"> 
                <span> <?php echo $post['title']; ?> </span> 
                <span> le <?php echo $post['date_creation_fr']; ?> </span> 
            </div>
            <div class="p-4">
                <span><?php echo $post['content']; ?></span>
            </div>
            <div class="d-flex justify-content-between border p-2">
                <span>Ajouter un commentaire</span> 
                <span>Lire les commentaires(<?php echo $nbComment ?>)</span>
            </div>
        </div>
    </div>
</div>
