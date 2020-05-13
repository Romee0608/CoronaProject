<?php 

include'databaseConnection.php';

$id = (int) $_GET['id'];
$articleQuery = "SELECT * FROM articles WHERE id='$id'";
$result = $connect->query($articleQuery);
$article = $result->fetch_assoc();
$body = str_replace(chr(13),"<br/><br/>",$article['body']);
require 'headerFinal.html' ?>

    <div id="mainContent">

        <div id="singleArticle">
            <img src="images/<?php echo $article['img'] ?>" alt='<?php echo $article['img'] ?>'>
            <div class="artText">
                <h3 class="artTitle"><?php echo $article['title']; ?></h3>
                <p class="artByline">Door: <a href="<?php echo $article['bron'] ?>" target="_blank"><?php echo $article['bron_naam'] ?></a> | Geplaatst op: <?php echo $article['published_at'] ?> | Laatst bewerkt: <?php echo $article['updated_at'] ?></p>
                <p><?php echo $body; ?></p>
                <p class="artSource">Bron: <a href="<?php echo $article['bron'] ?>" target="_blank"><?php echo $article['bron_naam'] ?></a></p>
            </div>
        </div>

    </div>

<?php require 'footerFinal.html' ?>