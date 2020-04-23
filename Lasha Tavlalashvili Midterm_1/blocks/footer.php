<footer>
        <table cellspacing="0">
            <tr>
                <td>ორშაბათი</td>
                <td>სამშაბათი</td>
                <td>ოთხშაბათი</td>
                <td>ხუთშაბათი</td>
                <td>პარასკევი</td>
                <td>შაბათი</td>
                <td>კვირა</td>
            </tr>
            <tr>
            <?php
                if($num_rows>=7){
                    $arr=array();
                    $query = "SELECT * FROM Varjishi";
                    $result = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($result)){
                        $arr = array_merge($arr, array_map('trim', explode(",", $row['Dasaxeleba'])));
                    }
                    $query = "SELECT * FROM Varjishi";
                    $result = mysqli_query($connection, $query);
                    while($row = mysqli_fetch_assoc($result)){
                        $random = rand(0, 6);
                        $info = $arr[$random];
                        // echo $info;
                        echo "<td><a href='?cat=".$info."'>".$info."</a></td>";
                    }
                }
            ?>
            </tr>
        </table>
        <?php
            if(isset($_POST['sub'])){
                $query = "SELECT * FROM Varjishi";
                $result = mysqli_query($connection, $query);
                while($row = mysqli_fetch_assoc($result)){
                    $Dasaxeleba = $row['Dasaxeleba'];
                    $Ganmarteba = $row['Ganmarteba'];
                    $sql = "INSERT INTO shenaxuli (Dasaxeleba, Ganmarteba)
                    VALUES ('$Dasaxeleba', '$Ganmarteba')";
                    mysqli_query($connection, $sql);
                }
                
            }
        ?>
        <form action="" method="post">
            <input type="submit" name="sub" value="Shenaxva">
        </form>
</footer>