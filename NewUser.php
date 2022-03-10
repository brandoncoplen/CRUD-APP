<?php

session_start();


if (!isset($_SESSION['user'])) {



    $nuname = $_POST['nuname'];
    $npwd = $_POST['npwd'];
    $spwd = $_POST['spwd'];

    if ($spwd != $npwd) {
        $_SESSION['perror'] = '';
        header('location: Register.php');
    } else {

        $npwd = password_hash($npwd, PASSWORD_DEFAULT);

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "crud";

        $conn = new mysqli($servername, $username, $password, $database);

        
// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query("SELECT id FROM users WHERE username = '$nuname'");
        if ($result->num_rows == 0) {



            $sql = "INSERT INTO users (username, password)
            VALUES ('$nuname', '$npwd')";

            if ($conn->query($sql) === true) {
                $_SESSION['user'] = $nuname;
                header('location: index.php');
            } else {

                echo 'Error: ' . $sql . "<br>" . $conn->error;
            }
        } else {
            $_SESSION['taken'] = '';
            header('location: Register.php');
        }





        $conn->close();
    }
}
?>


