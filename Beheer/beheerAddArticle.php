<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- jQuery via CDN -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="beheerStyleEditTemp.css">
</head>

<?php

// include'databaseConnection.php';
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "testbeheer";

//connection
$connect = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

if ($connect->connect_error) {
    die("FOUT: " . $connect->connect_error);
}

//  $id =  $_GET['id'];
// $id = 2;
 $articleQuery = "SELECT * FROM articles WHERE id='$id'";
 $result = $connect->query($articleQuery);
 $row = $result->fetch_array(MYSQLI_ASSOC);

 ?>

<body>
    <div class="headerBeheerContent">
        <div class="headerBeheerGrid">
            <div class="headerBeheerLogo">
                <a href="index.php"><img src="images/LOGO.png" alt="Coronet Logo"></a>
            </div>
            <div class="headerBeheerUser">
                <div><p> Welkom Henk Lutjebroek <?php   ?>  <a href='#' class='rotate'><i class="fa fa-gear"></i></a></div>
                <div><a href='#' class="borderLogout"><i class="fa fa-sign-out"></i>Uitloggen</a></div>
            </div>
        </div>
    </div>

<div class="sidenav">
  <a href="#"><i class="fa fa-home"></i>Home</a>
  <a href="#"><i class="fa fa-star"></i>Highlights</a>
  <a href="#"><i class="fa fa-list-ol "></i>Richtlijnen</a>
  <a href="#"><i class="fa fa-newspaper-o"></i>Nieuws</a>
  <a href="#"><i class="fa fa-question-circle"></i>FAQ</a>
</div>

<div class="main">
    <h2>Update artikel</h2>
    <hr>
    <div class="beheerEditorTemp">
        <form method="post">
                <label for="titel">Titel:</label><br>
                <input type="text" name="title" require><br>

                <label for="excerpt">Inleiding:</label><br>
                <input type="text"  name="excerpt" require><br>

                <label for="tumbnail">Tumbnail:</label><br>
                <input type="file"  name="img" require ><br>

                <label for="bron">Bron:</label><br>
                <input type="text" name="bron" require><br>

                <label for="bron">Bronnaam:</label><br>
                <input type="text" name="bron_naam" require><br>

                <label for="body">Body:</label></br>            
                <textarea name="body" require> </textarea> <br>
                
                <div class="knoppen">
                    <button class="opslaanKnop" name="save"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Opslaan </button>
                </div>
        </form>

        <?php

        if(isset($_POST['save'])){
   

            if(isset($_POST['save'])&&isset($_POST['title'])&&isset($_POST['img'])&&isset($_POST['excerpt'])&&isset($_POST['body'])&&isset($_POST['bron_naam'])&&isset($_POST['bron'])){

                if(!empty($_POST['title'])&&!empty($_POST['img'])&&!empty($_POST['excerpt'])&&!empty($_POST['body'])&&!empty($_POST['bron_naam'])&&!empty($_POST['bron'])){
                    $articleQuery = "INSERT INTO `articles` (`id`, `title`, `img`, `excerpt`, `body`, `bron_naam`, `bron`, `published_at`)VALUES (NULL,'{$_POST['title']}','{$_POST['img']}','{$_POST['excerpt']}','{$_POST['body']}','{$_POST['bron_naam']}','{$_POST['bron']}',now())";
            
                    // INSERT INTO `articles` (`id`, `title`, `img`, `excerpt`, `body`, `bron_naam`, `bron`, `published_at`) VALUES (NULL, '', '', '', '', '', '', NULL)
                    $result = $connect->query($articleQuery);
                }
            }
        
    // header("Location:  article.php?id=". $id);
        }

        ?>

    </div>
    
    
</div>

<div class="copyrightBeheerContent">
    <p> © 2020 Coronet - Alle rechten voorbehouden</p>
</div>
   
</body>
</html> 
