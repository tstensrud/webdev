<?php
    session_start();
?>
<?php
    if (isset($_POST["login"])){
        if (!empty($_POST["username"]) && !empty($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            header("Location: home.php");
        }
        else {
            echo "Missing username/password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
        Username: <input type="text" name="username">
        <br>
        Password: <input type="password" name="password">
        <br>
        <input type="submit" name ="login" value="Log in">
    </form>
</body>
</html>
  