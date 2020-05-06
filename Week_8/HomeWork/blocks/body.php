<div id="cont">
    <nav>
        <ul>
            <?php
                $query = "SELECT * FROM product";
                $result = mysqli_query($connection, $query);
                $num_rows = mysqli_num_rows($result);
                if(!$result){
                    die("Error!");
                }
                while($row = mysqli_fetch_assoc($result)){
                    echo "<li><a href='?cat=".$row["name"]."'>".$row["name"]." "."<a href='?id=".$row['id']."'><button>EDIT</button></a>"."</a></li><br>";
                }
            ?>
        </ul>
    </nav>
    <?php
        if(isset($_GET['top']) && $_GET['top']=='insert'){
            include "functions/insert.php";
        }
        else if(isset($_GET['top']) && $_GET['top']=='delete'){
            include "functions/delete.php";
        }
        else if(isset($_GET['id'])){
            include "functions/edit.php";
        }
        else{
            include "functions/select.php";
        }
    ?>
</div>