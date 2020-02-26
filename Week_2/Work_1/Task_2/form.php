<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <table cellspacing=0>
        <tr>
            <td>სახელი - </td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>გვარი - </td>
            <td>
                <input type="text" name="last">
            </td>
        </tr>
        <tr>
            <td>კურსი - </td>
            <td>
                <input type="number" name="course">
            </td>
        </tr>
        <tr>
            <td>სემესტრი - </td>
            <td>
                <input type="number" name="semester">
            </td>
        </tr>
        <tr>
            <td>მიღებული ნიშანი - </td>
            <td>
                <input id="point" onkeyup=calculateGrade() type="number" name="point">
            </td>
        </tr>
        <tr>
            <td>შეფასება - </td>
            <td>
                <input disabled id="grade" type="text" name="grade">
            </td>
            <tr>
                <td colspan="2"><input type="submit" name="send" value="გაგზავნა"></td>
            </tr>
        </tr>
    </table>
    </form>
    <br>
    <?php 
        if(isset($_POST["send"]))
        {
            include "block/table.php";
        }
    ?>
</body>
<script src="script.js"></script>
</html>