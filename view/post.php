<?php
    $postManager = new PostManager();
    $idPost = $_GET['id'];
    $post = $postManager->getPost($idPost);
    
    require('model/CommentManager.php');
    $commentManager = new CommentManager();
    $comments = $commentManager->getComments($idPost);
    $nbComment = count($comments);
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

<?php 
    $count = count ($comments);
    $nbComment = 0;
    while ($nbComment < $count)
    { 
?>
<div class="row justify-content-md-center rounded">
    <div class="col-6 p-4">
        <div class="d-flex justify-content-between border p-2"> 
            <span> Auteur : <?php echo $comments[0]['autor']; ?> </span> 
            <span> le <?php echo $comments[0]['date_creation']; ?> </span> 
        </div>

        <div class="p-4 border">
            <span><?php echo $comments[0]['content']; ?></span>
        </div>
    </div>
</div>
<?php
    $nbComment++;
    }
?>

<form class="row justify-content-md-center rounded" id="makeComment" action="index.php?c=PostComment.php" method="post">
    <div class="form-group">
        <input type="text" readonly class="form-control-plaintext" id="idPost" value="<?php echo $idPost ?>" name="idPost">
    </div>
    <div class="form-group">
        <label for="pseudo">Pseudo</label>
        <input type="text" class="form-control" id="userPseudo" name="userPseudo">
    </div>
    <div class="form-group">
        <label for="commentaire">Votre commentaire</label>
        <textarea class="form-control" id="contentComment" rows="3" name="contentComment"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
