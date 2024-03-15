<p>
    You are now officially loggged in as: <?php echo $_SESSION["username"]; ?>
    <br>
    Password used: <?php echo $_SESSION["password"]; ?>
    <br>
<?php
    echo "Your session id is: " . session_id() . "<br>";
    echo "<a href=\"logout.php\">Log out</a>";
?>
</p>