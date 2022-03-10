<?php
session_start();

if (isset($_SESSION['error1'])) {
    echo 'Wrong Pawssord';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['error1'])) {
            echo 'Wrong Pawssord';
        }



        if (!isset($_SESSION['user'])) {
            ?>

            <form action="Auth.php" method="POST">
                Login<br>
                Username: <input type="text" name="uname"><br>
                Password: <input type="password" name="pword"><br>
                <input type="submit" value="Log In"><br>
            </form>
            <form action="Register.php" method="POST">
                New User? Create account here: <input type="submit" value="Go">
            </form>

            <?php
        } else {
            
            ?>
        Welcome <?php echo $_SESSION['user']; ?>
            <br>
            <h2>TO DO</h2>
            <ul>
                <li><a href="select.php">View Table</a></li>
                <li><a href="insert.php">Create</a></li>
                <li><a href="update.php">Update</a></li>
                <li><a href="delete.php">Delete</a></li>
            </ul>
        </body>
    </html>
    <?php
}
?>