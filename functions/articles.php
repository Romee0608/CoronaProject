<?php
include'databaseConnection.php';

$articleQuery = "SELECT * FROM articles";
$result = $connect->query($articleQuery);

echo'<h1>Articles</h1>';
if ($result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo $row['id']
      ."<h2 ><a href='article.php?id=".$row['id']."'>{$row['title']}</a></h2>"
      ."<p style='margin:100px 0'>{$row['img']}:img</p>"
      ."<p style='margin:10px 0'>{$row['excerpt']}</p>"
      ."<p style='margin:10px 0'>{$row['body']}</p>"
      ."<p style='margin:10px 0'>{$row['bron']}</p>"
      ."<p style='margin:10px 0'>{$row['bron_naam']}</p>"
      ."<p style='margin:10px 0'>{$row['published_at']}</p><br>
      <a href='updateFunction.php?id=".$row['id']."'>bewerken</a>
      ";
    }
} 