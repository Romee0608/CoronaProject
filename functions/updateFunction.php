<?php
 include'databaseConnection.php';
 $id =  $_GET['id'];
 $articleQuery = "SELECT * FROM articles WHERE id='$id'";
 $result = $connect->query($articleQuery);
 $row = $result->fetch_array(MYSQLI_ASSOC);



?>
<form  method="post">
    title <input type="title" name="title" value="<?php echo"{$row['title']}"; ?>" require>
    img <input type="img" name="img" value="<?php echo"{$row['img']}"; ?>" require>
    excerpt <input type="excerpt" name="excerpt" value="<?php echo"{$row['excerpt']}"; ?>" require >
    body <textarea type="text" name="body" require><?php echo"{$row['body']}"; ?></textarea>
    bron naam <input type="text" name="bron_naam" value="<?php echo"{$row['bron_naam']}"; ?>" require >
    bron url <input type="text" name="bron" value="<?php echo"{$row['bron']}"; ?>" require >


<input type="submit" value="toevoegen" name="toevoegen">
</form>
<?php

 if(isset($_POST['toevoegen'])){
   

    $articleQuery = "UPDATE `articles` SET `title` = '{$_POST['title']}',`img` = '{$_POST['img']}',`excerpt` = '{$_POST['excerpt']}',`body` = '{$_POST['body']}',`bron_naam` = '{$_POST['bron_naam']}',`bron` = '{$_POST['bron']}',`updated_at` = now() WHERE `id` = ".$id;

  
    $result = $connect->query($articleQuery);
}




