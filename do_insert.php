<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('location: index.php');
}

$name = $_POST['name'];
$email = $_POST['email'];
$section = $_POST['section'];
$dob = $_POST['dob'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = new mysqli($servername, $username, $password, $database);

$sql = "INSERT INTO person (name, email, section, dob)
            VALUES ('$name', '$email', '$section', '$dob')";

if ($conn->query($sql) === true) {
    echo 'Entry successfull';
} else {
    echo "Entry Failed";
}


$conn->close();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php">
            <input type="submit" value="Menu">
        </form>
    </body>
</html>