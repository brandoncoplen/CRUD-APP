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
        
        <p />
        <?php
            
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "crud";

        $conn = new mysqli($servername, $username, $password, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        ?>
        <h2>Table:<br></h2>
        
        <?php
        
        
        

        $sql = "SELECT * FROM person";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo " - Name: " . $row["name"] . " - Email: " . $row["email"] . " - Section: " . $row["section"] . " - DOB: " . $row["dob"] . "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
        <form action="index.php">
            <input type="submit" value="Menu">
        </form>
    </body>
</html>
