<?php
    session_start();
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
<p>
Session ID:
<?php
    if ($_SESSION["loggedIn"] == true){
        include ("home.php");
    }
    else {
        echo "<form action=\"login.php\" method=\"post\">";
        echo "Username: <input type=\"text\" name=\"username\"> <br>";
        echo "Password: <input type=\"password\" name=\"password\"> <br>";
        echo "<input type=\"submit\" name =\"login\" value=\"Log in\">";
        echo "</form>";
    }
?>
</p>
</body>
</html>
  