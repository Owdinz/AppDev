<?php
include "config.php";

//get the article ID from URL
$id = $_GET['id'];
//delete the chosen article from the databse
$query="DELETE FROM articles WHERE id=$id";
mysqli_query($conn, $query);
//redirect to the homepage after deleting
header("Location: index.php");
exit();
?>