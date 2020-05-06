<?php
    if(isset($_GET["id"])){
        $id = $_GET['id'];
        $sql_edit = "SELECT * FROM menu WHERE id=$id";
        $result = mysqli_query($connection, $sql_edit);
        $row = mysqli_fetch_assoc($result);
    }
    if(isset($_POST['upbutton'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $keywords = $_POST['keywords'];
        $sql_update = "UPDATE menu SET title='$title', description='$description', keywords='$keywords'
        WHERE id=$id";
        mysqli_query($connection, $sql_update);
        header('location: /PHP-MySQL/Week_8/ClassWork/index.php?top=update');
    }
?>
<article>
    <h1>EDIT</h1>
    <form action="" style="padding:20px" method="post">
        Title 
        <input type="text" name="title" value="<?=$row['title']?>">
        <br>
        <br>
        Description
        <br>
        <textarea name="description" cols="30" rows="10"><?=$row['description']?></textarea>
        <br><br>
        Keywords
        <br>
        <textarea name="keywords" cols="30" rows="10"><?=$row['keywords']?></textarea>
        <br>
        <br>
        <input type="hidden" name="id" value="<?=$row['id']?>">
        <input type="submit" name="upbutton" value="UPDATE">
    </form>
</article>