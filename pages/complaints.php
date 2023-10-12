
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../assets/favicon.ico">

    <link rel="stylesheet" href="../style/complaints.css">

    <title>Complaints - CMS</title>
</head>


<body>

<div class="container">
	<div class="blob-container">
    <div class="blob"></div>
    <div class="blob one"></div>
    <div class="blob two"></div>
    <div class="blob three"></div>
    <div class="blob four"></div>
    <div class="blob five"></div>
    <div class="blob six"></div>
    <div class="blob seven"></div>
    <div class="blob eight"></div>
    <div class="blob nine"></div>
    <div class="blob ten"></div>
  </div>

  <section>
      <div class="card">
        <div class="card-child">
          <?php
            session_start();
            // echo $_SESSION['logged'];
            $user = $_SESSION['user'];
          if ($_SESSION['logged'] != "1") {
            header("Location: http://localhost/project/pages/login.php");
            exit();
          } 

          include("../handlers/dbConnectivity.php");
          $connection = dbConnectivity();
          $query = "SELECT * FROM admin WHERE username = '$user';";
          $result = mysqli_query($connection, $query);

          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $username= $row["username"];
                $position = $row["position"];
                $image = $row["profileURL"];
               echo "<img class='userProfile' alt='user profile' src = '$image'>";
            }
        }

        // trial
        

          
        // trial
          

          echo "<h1 class='user-title'>Welcome, $user ! <span class='xdgfds'><br>";
          echo "<h4 class='position'>$position</h4>"
          ?>
          <form action='../handlers/auth.php' method='POST'>
            <button class='solveBtn' name='logout'>Logout</button>
        </form>
          </span></h1>
          <!-- button -->
          
          <img class="image-container" src="../assets/user_avatar.svg" alt="user avatar" />
        </div>

          <div class="complaint-section">
              <h1 class="complaints-header">Complaints</h1>
  <table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Contact Number</th>
      <th>Email</th>
      <th>Title</th>
      <th>Description</th>
      <th>Status</th>
      <th>Previous</th>
      <th>Remarks</th>
      <th>Mark Solved</th>

    </tr>
  </thead>
  <tbody>
    <?php
    $str = "hello";


    function generateRandom5DigitNumber() {
      $min = 10000; // Smallest 5-digit number
      $max = 99999; // Largest 5-digit number
  
      return rand($min, $max);
  }

  // getting data from database

  // include("../handlers/dbConnectivity.php");
  $connection = dbConnectivity();

  $query = "SELECT * FROM complaints";
  $results = mysqli_query($connection, $query);

  if (mysqli_num_rows($results) > 0) {
    while($row = mysqli_fetch_assoc($results)) {
      $id= $row["id"];
      $name = $row["name"];
      $contact = $row["contact"];
      $email = $row["email"];
      $title = $row["title"];
      $description = $row["description"];
      $uniqueId = $row["uniqueId"];
      $status = $row["status"];
      $remarks = $row["remarks"];
      $remarkWord = "Solved";
      $fontColor = 'green';
      if ($status == '2') {
        $remarkWord = "Not Solved";
        $fontColor = 'red';
      }
      

      echo"  <tr>
      <td data-column=> $uniqueId </td>
      <td>$name</td>
      <td>$contact</td>
      <td>$email</td>
      <td>$title</td>
      <td>

      $description
      </td>
      <td>
      $remarks
      </td>
      <strong>
      <td  class='solveStatus' style='color: $fontColor' >$remarkWord</td>
      </strong>

      <form action='../handlers/updateComplaint.php' method='POST'>
      <td>
      <input placeholder='Write Remarks' type='text' id='adminRemark' name='adminRemark' required><br>
      <input style='display: none' id='uniqueId'  name='uniqueId'  value='$uniqueId'>
      </td>
      <td>
      <button type='submit' value='submit' class='solveBtn'>Mark Solved</button>
      </td>

      </form>

    </tr>
    ";

  }
  }


    ?>


  </tbody>
</table>    
        </div>

    </div>

  </section>
</div>

</body>

<?php
    $message = "Not recorded";

    if ($_GET) {
      try {
      if ($_GET["success"]) {
        $val =  $_GET["success"];      
        if ($val == '1') {
          echo '<script>
          alert("Updated Successfully")
      </script>';
    } else {
      echo '<script>
      alert("Error Occurred")
      </script>';
    }
  }
} catch (Exception $e) {

}

}
?>

<script src="../scripts/complaintsScript.js">

</script>

</html>




