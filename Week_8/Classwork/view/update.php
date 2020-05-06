<article>
    <h1>Update</h1><br>
    <table border="1">
        <?php
            $query = "SELECT * FROM menu";
            $result = mysqli_query($connection, $query);
            if(!$result){
                die("Error!");
            }
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>
                        <td>".$row["title"]."</td>
                        <td><a href='?id=".$row['id']."'><button>EDIT</button></a></td>
                     </tr>";
            }
        ?>
    </table>
</article>