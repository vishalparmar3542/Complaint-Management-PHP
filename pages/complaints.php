
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
            echo $_SESSION['logged'];
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
      <th>S.no</th>
      <th>Complaint Title</th>
      <th>Description</th>
      <th>Author</th>
      <th>SerialNumber</th>
      <th>Status</th>
      <th>Resolve</th>

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
      for ($x = 0; $x <= 10; $x++) {
        $y = generateRandom5DigitNumber();
      echo"  <tr>
        <td data-column=> $x </td>
        <td>Matman</td>
        <td>Chief Sandwich Eater</td>
        <td>@james</td>
        <td>$y</td>
        <strong>
        <td class='solveStatus' id='solveStatus$x'>Not Solved</td>
        </strong>
        <td>
        <button class='solveBtn' onClick='statusButton($x)'>Mark Solved</button>
        </td>
      </tr>
      ";
      }
    ?>


  </tbody>
</table>    
        </div>

    </div>

  </section>
</div>

</body>
<script src="../scripts/complaintsScript.js">
</script>

</html>




