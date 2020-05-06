<?php
    $query = "SELECT id, title FROM menu";
    $result = mysqli_query($connection, $query);
    if(isset($_GET["remove"])){
        $remove = $_GET["remove"];
        $delete_query = "DELETE FROM menu WHERE id='$remove'";
        mysqli_query($connection, $delete_query);
        header('location: /PHP-MySQL/Week_6/ClassWork/Simple/?top=delete');
    }
?>
<article>
        <h1>DELETE</h1>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "<p><a href='?top=delete&remove=".$row["id"]."'>".$row["title"]."</a></p><br>";
            }
        ?>
</article>