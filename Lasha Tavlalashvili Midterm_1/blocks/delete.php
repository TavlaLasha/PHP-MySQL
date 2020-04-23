<?php
    $query = "SELECT id, Dasaxeleba FROM Varjishi";
    $result = mysqli_query($connection, $query);
    if(isset($_GET["remove"])){
        $remove = $_GET["remove"];
        $delete_query = "DELETE FROM Varjishi WHERE id='$remove'";
        mysqli_query($connection, $delete_query);
        header('location: /PHP-MySQL/Lasha%20Tavlalashvili%20Midterm_1/?top=delete');
    }
?>
<article>
        <h1>Varjishis Washla</h1>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                echo "<p><a href='?top=delete&remove=".$row["id"]."'>".$row["Dasaxeleba"]."</a></p><br>";
            }
        ?>
</article>