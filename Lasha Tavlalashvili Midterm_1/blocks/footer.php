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
                    for($i=0; $i<=6; $i++){
                        $random = rand(0, 6);
                        $info = $arr[$random];
                        echo "<td><a href='?cat=".$row[$info]."'>".$row[$info]."</a></td>";
                    }
                }
            ?>
            </tr>
        </table>
</footer>