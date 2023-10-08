
<?php
echo "Hello ";

$name =  $_POST["name"];
$program = $_POST["program"];
$id = $_POST["id"];

$servername = "localhost";
$username = "root";
$password = "root";
$db = "phppractical";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
$selected = mysqli_select_db($conn, "phppractical");

if ($selected) {
    echo "success in connecting ";
}
$query = "select * from students;";
// 
$result = mysqli_query($conn, $query);

$query = "insert into students(id, name, program) values(?, ?, ?);";

$stmt =mysqli_prepare($conn, $query);

$bind = mysqli_stmt_bind_param($stmt, "iss", $id, $name, $program);
if (mysqli_stmt_execute($stmt)) {
  $is_recorded = 1;
    header("Location: http://localhost/indexx.php?is_recorded=".$is_recorded);
    exit();
    // echo "Record inserted successfully!";
} else {
    echo "Error: " . mysqli_error($mysqli);
}
// mysqli_execute_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["program"]. "<br>";
    }
  } else {
    echo "0 results";
  }
?>
