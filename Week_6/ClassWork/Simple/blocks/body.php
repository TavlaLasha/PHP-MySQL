<div id="container">
    <nav>
    <ul>
        <?php
            $query = "SELECT * FROM menu";
            $result = mysqli_query($connection, $query);
            if(!$result){
                die("Error!");
            }
            while($row = mysqli_fetch_assoc($result)){
                echo "<li><a href='?cat=".$row["title"]."'>".$row["title"]."</a></li><br>";
            }
        ?>
        </ul>
    </nav>


    <?php
        if(isset($_GET['top']) && $_GET['top']=='insert'){
            include "view/insert.php";
        }
        else if(isset($_GET['top']) && $_GET['top']=='delete'){
            include "view/delete.php";
        }
        else{
            include "view/select.php";
        }
    ?>
</div>