<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="">
    <table cellspacing=0>
        <tr>
            <td>Saxeli - </td>
            <td>
                <input type="text" name="username">
            </td>
        </tr>
        <tr>
            <td>Gvari - </td>
            <td>
                <input type="text" name="userlast">
            </td>
        </tr>
        <tr>
            <td>Tanamdeboba - </td>
            <td>
                <input type="text" name="userjob">
            </td>
        </tr>
        <tr>
            <td>Xelfasi - </td>
            <td>
                <input id="salary" onkeyup=calculateTax() type="number" name="salary">
            </td>
        </tr>
        <tr>
            <td>Sashemosavlo - </td>
            <td>
                <input disabled id="tax" type="number" name="tax">
            </td>
        </tr>
        <tr>
            <td>Daricxuli xelpasi - </td>
            <td>
                <input disabled id="usercash" type="number" name="usercash">
            </td>
            <tr>
                <td colspan="2"><input type="submit" name="send" value="გაგზავნა"></td>
            </tr>
        </tr>
    </table>
    </form>
    <br>
    <?php 
        if(isset($_GET["send"]))
        {
            include "block/table.php";
        }
    ?>
</body>
<script src="script.js"></script>
</html>