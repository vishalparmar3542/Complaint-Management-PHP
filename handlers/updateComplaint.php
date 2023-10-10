<?php
    include('dbConnectivity.php');
    try {
        if ($_POST) {
            $id = $_POST['uniqueId'];
            echo "name is:" . $id;
            $connection = dbConnectivity();
            
            $query = "UPDATE complaints SET status = 1 WHERE uniqueId = '$id'; ";
            
            if (mysqli_query($connection, $query)) {
                echo "success";
                header("Location: http://localhost/project/pages/complaints.php?success=1");
        } else {
            echo "failed to register";
            header("Location: http://localhost/project/pages/complaints.php?success=2");
        }
    }
} catch(Exception $e) {
    header("Location: http://localhost/project/pages/complaints.php?success=2");
}
?>