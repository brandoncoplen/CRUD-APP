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
        <form action="do_insert.php" method="post">
            Name: <input type="text" name="name" required><br/>
            email: <input type="text" name="email" required><br/>
            Section: <input type="text" name="section" required><br />
            DOB: <input type="calendar" name="dob" required><br />
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
