<div class="row justify-content-md-center rounded">
        <div class="col-11 border" id="epContent">
            <?php
                require('model/PostManager.php');
                $postManager = new PostManager();
                $post = $postManager->getPosts();
                $count = count ($post);
                $nbPosts = 0;

                while ($nbPosts < $count)
                { 
                    ?>
                        <div class="border m-4">

                            <div class="d-flex justify-content-between border p-2"> 
                                <span> <?php echo $post [$nbPosts]['title']; ?> </span> 
                                <span> le <?php echo $post [$nbPosts]['date']; ?> </span> 
                            </div>

                            <div class="contentPost p-4">
                                <?php echo $post [$nbPosts]['content']; ?>
                            </div>

                            <div class="d-flex justify-content-between border p-2">
                                <span>Ajouter un commentaire</span> 
                                <span>Lire les commentaires</span>
                            </div>

                            <?php $nbPosts ++; ?>

                        </div>
                    <?php
                }
            ?>
        </div>
    </div>