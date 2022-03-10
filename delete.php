<?php session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        Enter the name of the person to delete.
        <form action="do_delete.php" method="post" 
              onSubmit="if(confirm('Are you sure?')) return true; return false;">
            Name: <input type="text" name="firstname" />
            <input type="submit" />
        </form>
        
    </body>
</html>
