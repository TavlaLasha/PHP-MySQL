<div id="container">
    <nav>
    <ul>
        
    
        <?php
            $query = "SELECT * FROM menu";
            $result = mysqli_query($connection, $query);
            if(!$result){
                die("Error!");
            }
            // var_dump($result);
            // $row = mysqli_fetch_assoc($result);
            // // echo "<pre>";
            // // print_r($row);
            // // echo "</pre>";
            // echo "<li><a href=''>".$row["title"]."</a></li><br>";
            // $row = mysqli_fetch_assoc($result);
            // // echo "<pre>";
            // // print_r($row);
            // // echo "</pre>";
            // echo "<li><a href=''>".$row["title"]."</a></li><br>";
            while($row = mysqli_fetch_assoc($result)){
                echo "<li><a href='?cat=".$row["title"]."'>".$row["title"]."</a></li><br>";
            }
        ?>
        </ul>
    </nav>
    <article>
            <?php
                echo $_GET["cat"];
                $cat = $_GET["cat"];
                $query = "SELECT * FROM menu WHERE title='$cat'";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_assoc($result);
                // echo "<pre>";
                // print_r($row);
                // echo "</pre>";
            ?>
            <div>
                <?=$row['description']?>
            </div>
            <div>
                <?=$row['keywords']?>
            </div>
    </article>
</div>