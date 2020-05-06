<footer>
    <?php 
    if($num_rows>=5){?>
        <table cellspacing="0">
            <tr>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
            </tr>
            <tr>
            <?php
                $arr=array();
                $query = "SELECT * FROM product";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $arr = array_merge($arr, array_map('trim', explode(",", $row['name'])));
                }
                for($i=0; $i<5; $i++){
                    $rand_num = rand(0, (count($arr)-1));
                    $info = $arr[$rand_num];
                    array_splice($arr, $rand_num, 1);
                    echo "<td><a href='?cat=".$info."'>".$info."</a></td>";
                }
            ?>
            </tr>
        </table>
        <?php } ?>
</footer>