<?php

include 'config.php';//it includes for all the pages

//fetch all articles from the database
$query = "SELECT * FROM articles";
$result = mysqli_query($conn, $query);

//display the articles
while($row = mysqli_fetch_assoc($result)){
    echo "<h2>".$row['title']."</h2>";
    echo "<p>".$row['content']."</p>";
    echo "<a href='edit.php?id=".$row['id']."'>EDIT</a>|";
    echo "<a href='delete.php?id=".$row['id']."'>DELETE</a>|";
    echo"<hr>";
}
?>

<a href="add.php"> ADD new ARTICLE</a>