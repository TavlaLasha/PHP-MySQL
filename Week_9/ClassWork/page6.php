<h1>PAGE6</h1>
<?php
    session_start();
    echo $user;
    echo "<hr>";
    echo $_SESSION["userName"];
    echo "<hr>";
    echo $_SESSION["userPassword"];
?>