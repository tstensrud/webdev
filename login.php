<?php
    session_start();
    if (isset($_POST["login"])){
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
            $_SESSION["loggedIn"] = true;
            header("Location: index.php");
        }
        else {
            echo "<p>Missing username/password</p><br>";
        }
    }
?>