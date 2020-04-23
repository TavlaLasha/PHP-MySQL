<div id="cont">
    <nav>
        <ul>
            <?php
                $query = "SELECT * FROM Varjishi";
                $result = mysqli_query($connection, $query);
                $num_rows = mysqli_num_rows($result);
                if(!$result){
                    die("Error!");
                }
                while($row = mysqli_fetch_assoc($result)){
                    echo "<li><a href='?cat=".$row["Dasaxeleba"]."'>".$row["Dasaxeleba"]."</a></li><br>";
                }
            ?>
        </ul>
    </nav>
    <?php
        if(isset($_GET['top']) && $_GET['top']=='insert'){
            include "blocks/insert.php";
        }
        else if(isset($_GET['top']) && $_GET['top']=='delete'){
            include "blocks/delete.php";
        }
        else{
            include "blocks/select.php";
        }
    ?>
</div>