
<!-- todo  -->
<!-- create for admin and user -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/complaints.css">

    <title>Complaints</title>
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
          <h1 class="user-title">Welcome Bhanupratap ! <span class="xdgfds">
            <button class='solveBtn'>Logout</button>
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
<script src="../scripts/complaints.js">
</script>

</html>




