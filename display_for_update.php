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
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "crud";

        $conn = new mysqli($servername, $username, $password, $database);

        $sql = "SELECT * FROM Person WHERE name = '" . $_POST['firstname'] . "'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <form name="f" action="do_update.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label><?php echo $row['name'];?></label><br>
                    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>">
                    DOB: <input type="text" name="dob" value="<?php echo $row['dob']; ?>"><br/>
                    <br/>
                    <input type="submit" value="Update">
                </form>

                <?php
            }
        } else {
            echo "There is no person by that name in the database.";
            echo"<a href='index.php'>Menu</a>";
        }
        ?>
    </body>
</html>
