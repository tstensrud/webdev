<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
    <p>
<?php
    echo "Logged in as: " . $_SESSION["username"];
    echo "<br>";
?>
<a href="logout.php">TEST</a>
    </p>
</body>
</html>