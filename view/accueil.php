<section id="home" class="h-75 container">
    <div class="row mb-4"></div>
    <div class="row justify-content-md-center rounded mb-4">
        <div class="col-11 border p-2">
            <p>Bienvenue sur mon blog,</p>

            <p>Vous pourrez y découvrir mon prochain roman "Billet simple pour l'Alaska" que j'ai choisi
                de publier sous forme d'épisodes.</p>

            <p>N'hésitez pas à me faire part de vos remarques via la section commentaire de chaque billet</p>

            <p>Je vous souhaite une bonne lecture </p>
        </div>
    </div>
    <div class="row justify-content-md-center rounded">
        <div class="col-11 border" id="epContent">
            <p class="text-center font-weight-bold m-4">Dernier Article posté</p>
            <?php
                require('model/PostManager.php');
                $postManager = new PostManager();
                $post = $postManager->getLastPost();
                $idPost = $post[0]['id']; 
            ?>
            <div class="border m-4">
                <div class="d-flex justify-content-between border p-2"> 
                    <span> <?php echo $post[0]['title']; ?> </span> 
                    <span> le <?php echo $post[0]['date_creation']; ?> </span> 
                    <span> ID <?php echo $idPost?> </span> 
                </div>

                <div class="contentPost p-4">
                    <span><?php echo $post[0]['content']; ?></span>
                    <a href="pagePost.php?id=<?php echo $idPost ?>">Lire la suite...</a>
                </div>

                <div class="d-flex justify-content-between border p-2">
                    <span>Ajouter un commentaire</span> 
                    <span>Lire les commentaires</span>
                </div>
            </div>
        </div>
    </div>
</section>