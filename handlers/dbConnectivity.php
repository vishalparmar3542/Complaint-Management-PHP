for making connection with the database
<?php 

// establishing connection
define("server", "localhost");
define("user", "root");
define("pass", "root");
define("db_name", "cms");


function dbConnectivity() {
    try {
        $connection = mysqli_connect(server, user, pass, db_name);
        if (!$connection) {

            die( "failed to connect " . mysqli_connect_error());
        } 

        // $query = "select * from auth;";
    // $result = mysqli_query($connection, $query);
        return $connection;

    } catch (Exception $e) {
        return false;
    }
}

// function getName() {
//     return "hello there";
// }

// dbConnectivity();

// $connection = mysqli_connect(server, user, pass, db_name);
// if (!$connection) {

//     die( "failed to connect " . mysqli_connect_error());
// } 

// $query = "select * from admin;";
// // 
// $result = mysqli_query($connection, $query);

// if (mysqli_num_rows($result) > 0) {
//     while($row = mysqli_fetch_assoc($result)) {
//         echo "id" . $row["id"] . "username" . $row["username"];
//     }
// }

// return $connection;



?>