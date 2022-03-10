<?php session_start();


if (isset($_SESSION['taken'])){
    echo"Username is already taken";
}

if (isset($_SESSION['perror'])){
    echo "Passwords do not match";
}


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="NewUser.php" method="post">
            Enter New Username: <input type="text" name="nuname"><br>
            Enter New Password: <input type="password" name="npwd"><br>
            Re-Enter Password: <input type="password" name="spwd">
            <input type="submit">
        </form>
              
        
    </body>
</html>
