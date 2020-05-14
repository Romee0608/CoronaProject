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
    $id = 3;
    $faqQuery = "SELECT * FROM faq WHERE id='$id'";
    $result = $connect->query($faqQuery);
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
    <h2>Update FAQ</h2>
    <hr>
    <div class="beheerEditorTemp">
        <form method="post">
                <label for="question">Vraag:</label><br>
                <input type="text" name="question"value="<?php echo"{$row['question']}"; ?>" require><br>

                <label for="answer">Antwoord:</label><br>
                <input type="text"  name="answer" value="<?php echo"{$row['answer']}"; ?>" require ><br>
                
                <div class="knoppen">
                    <button class="verwijderKnop" name="delete"> <i class="fa fa-trash" aria-hidden="true"></i> Verwijderen </button>
                    <button class="opslaanKnop" name="save"> <i class="fa fa-floppy-o" aria-hidden="true"></i> Opslaan </button>
                </div>
        </form>

        <?php

        if(isset($_POST['save'])){
   

        $faqQuery = "UPDATE `faq` SET `title` = '{$_POST['question']}',`img` = '{$_POST['answer']}',`excerpt` = '{$_POST['excerpt']}',`body` = '{$_POST['body']}',`bron_naam` = '{$_POST['bron_naam']}',`bron` = '{$_POST['bron']}',`updated_at` = now() WHERE `id` = ".$id;

  
        $result = $connect->query($faqQuery);
        
        // header("Location:  article.php?id=". $id);
        }

        if(isset($_POST['delete'])){

        $sql = "DELETE FROM articles WHERE id =" . $id;

        $conn = $connect->query($sql);
        }
        ?>

    </div>
    
    
</div>

<div class="copyrightBeheerContent">
    <p> © 2020 Coronet - Alle rechten voorbehouden</p>
</div>
   
</body>
</html> 
