
<!-- todo  -->
<!-- create for admin and user -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../assets/favicon.ico">

    <link rel="stylesheet" href="../style/login.css">

    <title>Log Complaint - CMS</title>
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
              <div class="title">
         <h1><span>CMS<br></span> Log Complaint</p>
       </div>
      <div class="description">
      <div class="login-form">
        <h2>Complaint Details</h2>
        <form action = "../handlers/recordComplaint.php" method="POST">
        <label for="name">Name:</label>
        <input value='Adyut' type="text" id="name" name="name" required><br>
        <label for="contact">Contact number</label>
        <input value="9131987420" type="number" id="contact" name="contact" required><br>
        <label for="email">Email:</label>
        <input value="kumaradyut@gmail.com" type="email" id="email" name="email" required><br>
        <label for="title">Title</label>
        <input value='Watch problem' type="text" id="title" name="title" required><br>
        <label for="complaint">Complaint:</label><br>
        <textarea id="complaint" name="complaint" rows="4" cols="50" required>My watch stopped working after water damage.</textarea><br>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
    

    </div>

  </section>
</div>
<?php
    $message = "Not recorded";

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
?>

</body>
</html>




