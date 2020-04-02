<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task_4</title>
</head>
<body style="text-align:center">
    <form action="" method="post">
        <h1>Text Generator</h1>
        English - <input type="radio" name="lang" value="en" checked> <br>
        Georgian- <input type="radio" name="lang" value="ge"> <br><br>
        <input type="submit" name="sub"><br><br>
    </form>
    <?php
        if(isset($_POST["sub"])){
            $EN = "abcdefghijklmnopqrstuvwxyz";
            $GE = "აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭხჯჰ";
            if($_POST["lang"]=="en"){
                generate($EN);
            }else if($_POST["lang"]=="ge"){
                generate($GE);
            }
        }
        function generate($lang){
            for($i=0; $i<=rand(3, 20); $i++){
                $word='';
                for($j=0; $j<=rand(3, 20); $j++){
                    $word.= $lang[rand(0, strlen($lang)-1)];
                }
                echo $word." ";
            }
        }
    ?>
</body>
</html>