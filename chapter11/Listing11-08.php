<?php if ($userStatus == "loggedin") { ?>
    <a href="account.php">Account</a>
    <a href="logout.php">Logout</a>
<?php } else { ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
<?php } ?>
<?php
// equivalent to the above conditional
if ($userStatus == "loggedin") {
    echo '<a href="account.php">Account</a> ';
    echo '<a href="logout.php">Logout</a>';
}
else {
    echo '<a href="login.php">Login</a> ';
    echo '<a href="register.php">Register</a>';
}
?>