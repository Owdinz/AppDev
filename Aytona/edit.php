<?php
include "config.php";

if($_SERVER['REQUEST_METHOD']==='POST') {
    $id=$_POST['id'];
    $title=$_POST['title'];
    $content=$_POST['content'];

    $query = "UPDATE articles SET title='$title', content='$content' WHERE id='$id'";

    mysqli_query($conn, $query);

    header("Location: index.php");
    exit();
}
//get the article ID from the url
$id=$_GET['id'];
//fetch the article from the database
$query="SELECT*FROM articles WHERE id=$id";
$result=mysqli_query($conn,$query);
$article = mysqli_fetch_assoc($result);
?>

<form method="POST" action="">
    <input type="hidden" name="id" value="<?php echo$article['id']; ?>">
    <label>Title: </label><br/>
    <input type="text" name="title" value="<?php echo$article['title']; ?>"><br/><br/>
    <label> Content: </lable><br/>
    <textarea name="content"><?php echo$article['content']; ?></textarea><br/><br/>
    <input type="submit" value="Update Article">
</form>