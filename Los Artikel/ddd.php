<?php 
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

//connection
$connect = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if ($connect->connect_error) {
    die("FOUT: " . $connect->connect_error);
}


$sql = "SELECT * FROM `articles` WHERE ID = 39";
$result = $connect->query($sql);
$article = $result->fetch_assoc();

require 'headerFinal.html' ?>

<div id="mainContent">
    <div id="singleArticle">
        <div class="artThumbnail"></div>
        <div class="artText">
            <h3 class="artTitle"><?php echo $article['title']; ?></h3>
            <p class="artByline">Door Coronet.nl | 11 mei 2020 09:01 | Laatse update: 12:09</p>
            <p class="artExcerpt"><?php echo $article['excerpt']; ?></p>
            <p><?php echo $article['body']; ?></p>
            <p class="artSource">Bron: <a href="#">Nu.nl</a></p>
        </div>
    </div>
</div>

<?php require 'footerFinal.html' ?>