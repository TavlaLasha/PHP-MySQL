<article>
        <?php
        if(isset($_GET["cat"])){
            // echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM Varjishi WHERE Dasaxeleba='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
        ?>
        <div id="title">
            <?=$cat?>
        </div>
        <div id="desc">
            <?=$row['Ganmarteba']?>
        </div>
        <?php
        }
        ?>
</article>