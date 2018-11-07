<section id="home" class="h-75 container">
    <div class="row mb-4"></div>
    <div class="row justify-content-md-center rounded mb-4">
        <div class="col-10 border">
            <p>Bienvenue sur mon blog,</p>

            <p>Vous pourrez y découvrir mon prochain roman "Billet simple pour l'Alaska" que j'ai choisi
                de publier sous forme d'épisodes.</p>

            <p>N'hésitez pas à me faire part de vos remarques via la section commentaire de chaque billet</p>

            <p>Je vous souhaite une bonne lecture </p>
        </div>
    </div>
    <div class="row justify-content-md-center rounded">
        <div class="col-11 border" id="epContent">
            <?php
                require('model/PostManager.php');
                $postManager = new PostManager();
                $post = $postManager->getPosts();
                $count = count ($post);
                var_dump($count);
                ?>
                    <div class="border m-4">

                        <div class="d-flex justify-content-between border p-2"> 
                            <span> <?php echo $post [$count]['title']; ?> </span> 
                            <span> le <?php echo $post [$count]['date']; ?> </span> 
                        </div>

                        <div class="contentPost p-4">
                            <?php echo $post [$count]['content']; ?>
                        </div>

                        <div class="d-flex justify-content-between border p-2">
                            <span>Ajouter un commentaire</span> 
                            <span>Lire les commentaires</span>
                        </div>

                    </div>
                <?php
            ?>
        </div>
    </div>
</section>