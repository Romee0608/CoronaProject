<?php
 include'databaseConnection.php';

 if(isset($_POST['toevoegen'])&&isset($_POST['title'])&&isset($_POST['img'])&&isset($_POST['excerpt'])&&isset($_POST['body'])&&isset($_POST['bron_naam'])&&isset($_POST['bron'])){

    if(!empty($_POST['title'])&&!empty($_POST['img'])&&!empty($_POST['excerpt'])&&!empty($_POST['body'])&&!empty($_POST['bron_naam'])&&!empty($_POST['bron'])){
        $articleQuery = "INSERT INTO `articles` (`id`, `title`, `img`, `excerpt`, `body`, `bron_naam`, `bron`, `published_at`)VALUES (NULL,'{$_POST['title']}','{$_POST['img']}','{$_POST['excerpt']}','{$_POST['body']}','{$_POST['bron_naam']}','{$_POST['bron']}',now())";

        // INSERT INTO `articles` (`id`, `title`, `img`, `excerpt`, `body`, `bron_naam`, `bron`, `published_at`) VALUES (NULL, '', '', '', '', '', '', NULL)
        $result = $connect->query($articleQuery);
    }
}
?>
<form  method="post">
    title <input type="title" name="title"require>
    img <input type="img" name="img"  >
    excerpt <input type="excerpt" name="excerpt"require >
    body <textarea type="body" name="body"></textarea>
    bron naam <input type="bron_naam" name="bron_naam"require >
    bron url <input type="bron" name="bron"require >


<input type="submit" value="toevoegen" name="toevoegen">
</form>
