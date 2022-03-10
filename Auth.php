<?php

session_start();

$uname = $_POST['uname'];
$pword = $_POST['pword'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "crud";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT password FROM users WHERE username= '$uname'";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $dbpwd = $row['password'];
}
if (password_verify($pword, $dbpwd)) {
    $_SESSION['user'] = $uname;
    unset($_SESSION['error1']);
    header('location: index.php');
} else {
    $_SESSION['error1'] = '';
    header('location: index.php');
}

$conn->close();
?>
