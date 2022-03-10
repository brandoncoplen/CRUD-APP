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

$firstname = $_POST['firstname'];
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $sql = "DELETE FROM person WHERE name = '$firstname'";
        if ($conn->query($sql) === true) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record" . $conn->error;
        }
        ?>

        <form action="index.php">
            <input type="submit" value="Menu">
        </form>
    </body>
</html>
