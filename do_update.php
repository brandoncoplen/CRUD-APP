<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = new mysqli($servername, $username, $password, $database);

$email = $_POST['email'];
$dob = $_POST['dob'];
$id = $_POST['id'];

$sql = "UPDATE person SET email='$email', dob='$dob' WHERE id='$id'";

if ($conn->query($sql) === true) {
    echo "Update recorded succesfully";
} else {
    echo "Update Failed" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php">
            <input type="submit" value="Menu">
        </form>
    </body>
</html>

