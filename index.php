<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <p>
        <form action="index.php" method="get">
            Username: <input type="text" name="username">
            <br>
            Password: <input type="password" name="password">
            <br>
            <input type="submit" name ="login" value="Log in">
        </form>
        <p>
        <?php
            if (isset($_GET["login"])){
                $username = $_GET["username"];
                $password = $_GET["password"];

                echo $username . "<br>";
                echo $password;
            }
        ?>
        </p>
    
    </p>
    
</body>
</html>