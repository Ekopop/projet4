<div class="row justify-content-md-center rounded">
    <div class="col-11 border" id="epContent">
        <?php
            $postManager = new PostManager();
            $postList = $postManager->getPosts();
            $count = count($postList);
            $nbPosts = 0;
            while ($nbPosts < $count)
            {
                $contentPreview = $postList[$nbPosts]['content'];
                $wordList = explode(' ', $contentPreview);
                $wordListLength = count($wordList);
                $nbWordToDisplay = $wordListLength >= 500 ? 500 : $wordListLength - 1;
                $wordList = array_slice($wordList, 0, $nbWordToDisplay);

                $contentPreview = implode(' ', $wordList) . '...';
        ?>
            <div class="border m-4">
                <div class="d-flex justify-content-between border p-2"> 
                    <span> <?php echo $postList [$nbPosts]['title']; ?> </span> 
                    <span> le <?php echo $postList [$nbPosts]['date_creation']; ?> </span> 
                </div>
                <div class="contentPost p-4">
                    <span><?php echo $contentPreview; ?></span>
                    <a href="pagePost.php?id= <?php $idPost ?> ">Lire la suite...</a>
                </div>
                <div class="d-flex justify-content-between border p-2">
                    <span>Ajouter un commentaire</span> 
                    <span>Lire les commentaires</span>
                </div>
            </div>
        <?php
                $nbPosts ++;
            }
        ?>
    </div>
</div>