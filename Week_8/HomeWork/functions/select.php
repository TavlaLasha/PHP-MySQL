<?php
    if(isset($_GET["more"])){
        include "info.php";
    }
?>
<article>
        <?php
        if(isset($_GET["cat"])){
            $cat = $_GET["cat"];
            $query = "SELECT * FROM product WHERE name='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div id="info">
        <h3>Product</h3>
        <div>
            Name: <?=$row['name']?>
        </div>
        <div>
            Company: <?=$row['company']?>
        </div>
        <div>
            Weight: <?=$row['weight']?> g
        </div>
        <br>
        <form method="get">
            <input type="hidden" name="idd" value="<?=$row["id"]?>">
            <input type="submit" name="more" value="More Details">
        </form>
        </div>
        <?php
        }
        ?>
</article>