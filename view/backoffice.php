<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="../js/tinymce.js"></script>
List des posts :

<?php
    $postManager = new PostManager();
    $postList = $postManager->getPosts();
    $count = count($postList);
    $nbPosts = 0;
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Titre</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

<?php
    while ($nbPosts < $count)
    {
?>
    <tr>
        <td><?php echo $postList [$nbPosts]['id']; ?></td>
        <td><?php echo $postList [$nbPosts]['title']; ?></td>
        <td><a href="index.php?c=deletBillet&id=<?php echo $postList [$nbPosts]['id']; ?>"><i class="fas fa-trash-alt"></i></a><a href="index.php?c=modifPost&id=<?php echo $postList [$nbPosts]['id']; ?>"> <i class="fas fa-pen"></i></a></td>
    </tr>
<?php
        $nbPosts ++;
    }
?>
    </tbody>
</table>

Ajouter un post :
<form class="row justify-content-md-center rounded" id="addPost" action="index.php?c=PostBillet" method="post">
    <div class="form-group">
        <label for="pseudo">Titre du post</label>
        <input type="text" class="form-control" id="Title" name="title">
    </div>
    <div class="form-group">
        <label for="pseudo">Contenu</label>
        <textarea class="form-control" id="content" name="content" rows="25" ></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
