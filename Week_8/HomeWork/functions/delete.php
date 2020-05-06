<?php
    $query = "SELECT id, name FROM product";
    $result = mysqli_query($connection, $query);
    if(isset($_GET["remove"])){
        $remove = $_GET["remove"];
        $delete_query = "DELETE FROM product WHERE id='$remove'";
        mysqli_query($connection, $delete_query);
        header('location: /PHP-MySQL/Week_8/HomeWork/?top=delete');
    }
?>
<article>
        <h1>Product Removal</h1>
        Select product to be removed
        <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "<p><a href='?top=delete&remove=".$row["id"]."'>".$row["name"]."</a></p><br>";
            }
        ?>
</article>