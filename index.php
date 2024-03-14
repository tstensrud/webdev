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
    <form action="login.php" method="post">
        Username: <input type="text" name="username">
        <br>
        Password: <input type="password" name="password">
        <br>
        <input type="submit" name ="login" value="Log in">
    </form>

<p>
    Session ID:
<?php
    if ($_SESSION["loggedIn"] == true){
        echo session_id();
        echo "<br>";
        echo "<a href=\"logout.php\">Log out</a>";
    }
    else {
        echo "Not logged in";
    }
?>
</p>
</body>
</html>
  