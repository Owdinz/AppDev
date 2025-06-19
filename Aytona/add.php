<?php
include "config.php";

if($_SERVER['REQUEST_METHOD']==='POST'){
    //get tge articles

    $title=$_POST['title'];
    $content =$_POST['content'];

    //insert the article into the database
    $query = "INSERT INTO articles (title, content) VALUES ('$title', '$content')";

    mysqli_query($conn, $query);

    //redirect to the homepage after adding
    header("Location:index.php");
    exit();//close connection
}
?>

<form method="POST" action="">
    <label> Title: </label><br/>
    <input type ="text" name="title"><br/><br/>
    <textarea name="content"></textarea><br/><br/>
    <input type="submit" value="Add Article">
</form>