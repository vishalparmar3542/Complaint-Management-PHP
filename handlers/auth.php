<!-- for handling admin login -->
<?php
    $name = $_POST["username"];
    $pass = $_POST["password"];

    echo $name . $pass;
    session_start();

    include("dbConnectivity.php");
    $connection = dbConnectivity();
    $query = "SELECT * FROM admin WHERE username = '$name' AND password = '$pass';";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['user'] = $row["username"];
            $unique_token = time();
            $_SESSION['logged'] = "1";
            header("Location: http://localhost/project/pages/complaints.php?user=" . $row["username"]);
            echo "id" . $row["id"] . "username" . $row["username"];
        }
    } else {
        header("Location: http://localhost/project/pages/login.php?status=0");
        exit();
        // echo "hello";
    }
?>