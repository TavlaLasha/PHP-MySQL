<h1>PAGE2</h1>
<?php
    session_start();
    echo $user;
    $_SESSION["userName"] = "lado";
    $_SESSION["userPassword"] = "123";
    echo "<hr>";
    echo $_SESSION["userName"];
?>