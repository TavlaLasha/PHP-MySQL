<table cellspacing=0>
        <tr>
            <td>სახელი - </td>
            <td>
                <?=
                    $_POST['name'];
                ?>
            </td>
        </tr>
        <tr>
            <td>გვარი - </td>
            <td>
            <?=
                    $_POST['last'];
                ?>
            </td>
        </tr>
        <tr>
            <td>კურსი - </td>
            <td>
            <?=
                    $_POST['course'];
                ?>
            </td>
        </tr>
        <tr>
            <td>სემესტრი - </td>
            <td>
            <?=
                    $_POST['semester'];
                ?>
            </td>
        </tr>
        <tr>
            <td>მიღებული ნიშანი - </td>
            <td>
            <?=
                    $_POST['point'];
                ?>
            </td>
        </tr>
        <tr>
            <td>შეფასება - </td>
            <td>
            <?=
                $inf = $_POST['point'];
                    if($inf<50 && $inf >= 0){
                        echo "F-ცუდი";
                    }
                    else if($inf>=50 && $inf < 65){
                        echo "E-ნორმალური";
                    }
                    else if($inf>=65 && $inf < 80){
                        echo "C-კარგი";
                    }
                    else if($inf>=80 && $inf < 95){
                        echo "B-ძალიან კარგი";
                    }
                    else if($inf>=95 && $inf < 100){
                        echo "A-ფრიადი";
                    }
                    else {
                        echo "^ არასწორი ქულა ^";
                    }
                ?>
            </td>
        </tr>
</table>