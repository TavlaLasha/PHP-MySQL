<?php
    $id = $_GET["idd"];
    $query = "SELECT * FROM product WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
?>
<div id="info">
    <h3>Product Details</h3>
        <div>
            Name: <?=$row['name']?>
        </div>
        <div>
            Count: <?=$row['count']?>
        </div>
        <div>
            Manufacture Date: <?=$row['mdate']?>
        </div>
        <div>
            Expiration Date: <?=$row['edate']?>
        </div>
        <div>
            Company: <?=$row['company']?>
        </div>
        <div>
            Weight: <?=$row['weight']?> g
        </div>
        <div>
            Calories: <?=$row['cal']?> 
        </div>
        <div>
            Fat: <?=$row['fat']?> %
        </div>
        <div>
            Registration Date: <?=$row['rdate']?>
        </div>
        <br>
        <a href="index.php?cat=<?=$row['name']?>"><button>Go Back</button></a>
</div>