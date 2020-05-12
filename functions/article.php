<?php
include'databaseConnection.php';
$id = (int) $_GET['id'];
$articleQuery = "SELECT * FROM articles WHERE id='$id'";
$result = $connect->query($articleQuery);
$row = $result->fetch_array(MYSQLI_ASSOC);


echo "<h1>{$row['title']}</h1>";

echo"<p style='margin:5px 0;'>{$row['excerpt']}</p>";

echo"<p style='margin:20px 0;'>{$row['body']}</p><br><a href='updateFunction.php?id=".$row['id']."'>bewerken</a>";




 